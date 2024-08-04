<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Campaign extends Model
{
    use HasFactory;

    protected $fillable = [
        'campaign_name',
        'donated_amount',
        'number_of_meals',
        'price_per_meal',
        'author',
        'author_id',
        'description',
        'image',
        'end_date',
        'completed_at',
        'meal_name',
        'start_time',
        'end_time',
        'location',
    ];

    protected $casts = [
        'end_date' => 'date',
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            $model->updateNumberOfMeals();
        });
    }

    public function updateNumberOfMeals()
    {
        Log::info('Entering updateNumberOfMeals method', [
            'donated_amount' => $this->donated_amount,
            'price_per_meal' => $this->price_per_meal
        ]);

        try {
            if ($this->price_per_meal > 0) {
                $this->number_of_meals = floor($this->donated_amount / $this->price_per_meal);
            } else {
                $this->number_of_meals = 0; // Avoid division by zero
            }

            Log::info('Updated number of meals', [
                'number_of_meals' => $this->number_of_meals
            ]);
        } catch (\Exception $e) {
            Log::error('Error updating number of meals: ' . $e->getMessage());
        }
    }
    public function donations()
{
    return $this->hasMany(Donation::class);
}

}

