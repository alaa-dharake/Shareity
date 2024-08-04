<?php declare(strict_types=1);

namespace App\Services;

use Exception;
use App\Utilities\Similarity;

class DishSimilarity
{
    protected $dishes = [];

    public function __construct(array $dishes)
    {
        $this->dishes = $dishes;
    }


    public function calculateSimilarityMatrix(): array
    {
        $matrix = [];

        foreach ($this->dishes as $dish) {
            $similarityScores = [];

            foreach ($this->dishes as $_dish) {
                if ($dish->id === $_dish->id) {
                    continue;
                }
                $similarityScores['dish_id_' . $_dish->id] = $this->calculateSimilarityScore($dish, $_dish);
            }
            $matrix['dish_id_' . $dish->id] = $similarityScores;
        }
        return $matrix;
    }

    public function getDishesSortedBySimilarity(int $dishId, array $matrix): array
    {
        $similarities = $matrix['dish_id_' . $dishId] ?? null;
        $sortedDishes = [];

        if (is_null($similarities)) {
            throw new Exception('Can\'t find dish with that ID.');
        }
        arsort($similarities);

        foreach ($similarities as $dishIdKey => $similarity) {
            $id = intval(str_replace('dish_id_', '', $dishIdKey));
            $dishes = array_filter($this->dishes, function ($dish) use ($id) { return $dish->id === $id; });
            if (! count($dishes)) {
                continue;
            }
            $dish = array_values($dishes)[0];
            $dish->similarity = $similarity;
            $sortedDishes[] = $dish;
        }
        return $sortedDishes;
    }

    protected function calculateSimilarityScore($dishA, $dishB)
    {
        $dishAIngredients = $dishA->ingredients;
        $dishBIngredients = $dishB->ingredients;

        return Similarity::jaccard($dishAIngredients, $dishBIngredients) ;
    }
}
