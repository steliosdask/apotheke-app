<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;        

    public function supplier(){
        return $this->belongsTo(Supplier::class);
    }

    public function sale(){
        return $this->belongsToMany(Sale::class);
    }
}
