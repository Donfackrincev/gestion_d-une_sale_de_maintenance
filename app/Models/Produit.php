<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $guaded = [];
    public function produit(){
        return $this->hasMany(Client::class); 
    }
}
