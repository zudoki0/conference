<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'author',
        'speaker',
        'description',
        'address',
        'location',
        'max_participants',
        'status',
        'conference_start_date',
        'conference_end_date'
    ];
}
