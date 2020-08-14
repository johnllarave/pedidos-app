<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function client() {
		return $this->belongsTo(Client::class);
	}

	public function order_product() {
		return $this->hasMany(OrderProduct::class);
	}
}
