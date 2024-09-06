<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'start',
        'duration',
        'image',
        'price',
        'total_tickets',
        'end_of_sale',
        'location_id',
        'user_id'
    ];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
