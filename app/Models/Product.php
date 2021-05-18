<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

       protected $fillable = [
         'note',
        'quantity',
        'image'
       ];
       public function orders(){
         return $this->hasMany(UserOrder::class);
       }
}
