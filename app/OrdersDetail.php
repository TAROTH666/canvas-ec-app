<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdersDetail extends Model
{
  protected $fillable = ['order_id', 'item_id', 'item_name', 'price', 'image_path', 'amount',];

  public function order()
  {
    return $this->belongsTo(Order::class);
  }
}