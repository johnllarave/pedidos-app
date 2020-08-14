<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function order_product() {
		return $this->hasMany(OrderProduct::class);
	}
}
