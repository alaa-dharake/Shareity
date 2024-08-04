<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampaignRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'chef_id', 
        'campaign_name', 
        'campaign_description', 
        'campaign_meal', 
        'campaign_date', 
        'campaign_startTime', 
        'campaign_endTime',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function chef()
    {
        return $this->belongsTo(User::class, 'chef_id');
    }
}
