<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    
     protected $table='user_orders';
     protected $fillable=[
     'image',
     'note',
     'quantity',
     'order_status_id',
     ];
    
}
