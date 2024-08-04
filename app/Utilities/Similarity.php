<?php declare(strict_types=1);

namespace App\Utilities;

class Similarity
{
    public static function jaccard(array $setA, array $setB): float
    {
        $intersection = array_intersect($setA, $setB);
        $union = array_unique(array_merge($setA, $setB));

        return count($intersection) / count($union);
    }
}
