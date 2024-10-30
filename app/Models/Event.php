<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'date',
        'location',
        'category_id',
    ];

    protected $casts = [
        'date' => 'datetime', // Ensure the date is cast to a DateTime instance
    ];

    // Define relationships with Category and Attendees
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function attendees()
    {
        return $this->hasMany(Attendee::class);
    }
}