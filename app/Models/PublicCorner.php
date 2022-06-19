<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicCorner extends Model
{
    use HasFactory;

    protected $table = 'public_corner';
    protected $guarded = ['id'];

    protected $dates = [
        'created_at',
        'updated_at',
        // your other new column
    ];
}
