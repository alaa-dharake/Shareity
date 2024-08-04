<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MealRequest extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'chef_id', 'meal_name', 'requested_date', 'requested_time', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function chef()
    {
        return $this->belongsTo(User::class, 'chef_id');
    }
}
