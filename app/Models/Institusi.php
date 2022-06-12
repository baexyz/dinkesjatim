<?php

namespace App\Models;

use App\Models\User;
use App\Models\Bidang;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Institusi extends Model
{
    use HasFactory;
    use Sluggable;

    protected $table = 'institusi';
    protected $guarded = ['id'];

    public function bidang(){
        return $this->belongsTo(Bidang::class);
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
