<?php

namespace App\Models;

use App\Models\Institusi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bidang extends Model
{
    use HasFactory;

    protected $table = 'bidang';
    protected $guarded = ['id'];

    public function institusi(){
        return $this->hasMany(Institusi::class);
    }
}
