<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];


    public function user()
    {
        return $this->belongsTo(User::class);

    }


    public function payment()
    {
        return $this->belongsTo(Payment::class,'id','order_id');

    }

    public function paymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class);

    }

    public function deliveryMethod()
    {
        return $this->belongsTo(DeliveryMethod::class);

    }

    public function address()
    {
        return $this->belongsTo(Address::class);

    }
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);

    }

}
