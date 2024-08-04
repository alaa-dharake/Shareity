<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'price', 'quantity', 'startTime', 'day', 'endTime', 'category_id', 'ingredients', 'image', 'user_id'
    ];

    protected $casts = [
        // 'startTime' => 'datetime:H:i',
        // 'endTime' => 'datetime:H:i',
        // 'day' => 'date',
        'ingredients' => 'array', // Cast ingredients attribute as an array
];

// public function getIngredientsAttribute($value)
//     {
//         return is_array($value) ? $value : json_decode($value, true);
//     }


    public function scopeFilter($query, array $filters)
    {
        if (!empty($filters['search'])) {
            $query->where('name', 'like', '%' . $filters['search'] . '%')
                ->orWhere('ingredients', 'like', '%' . $filters['search'] . '%');
        }
    
        if (!empty($filters['categories'])) {
            $query->where('category_id', $filters['categories']);
        }
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function campaigns()
    {
        return $this->belongsTo(Campaign::class, 'campaign_id');
    }

    public function scopeByCategory($query, $category)
    {
        return $query->whereHas('categories', function ($query) use ($category) {
            $query->where('name', $category);
        });
    }
    public function mealRequests() {
        return $this->hasMany(MealRequest::class);
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
