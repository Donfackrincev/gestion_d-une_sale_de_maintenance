<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panne extends Model
{
    use HasFactory;
    protected $guaded = [];
    public function machine(){
        return $this->hasMany(Machine::class); 
    }
}
