<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    
     protected $table='orders';
     protected $fillable=[
     'image',
     'note',
     'name',
     'quantity',
     'user_id',
     'order_status_id',
    'product_id',
     ];

    public function getOrderStatusNameAttribute(){
        return OrderStatus::find($this->order_status_id)->title??'';
        //return $this->orderStatus->title;
    }
    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function OrderStatus(){
        return $this->belongsTo(OrderStatus::class);
    }
}
