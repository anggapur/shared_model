<?php

namespace Poska;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Poska\Payment;

class OrderBills extends Model
{
    use SoftDeletes;

    protected $table = "order_bills";
    protected $fillable = [
        "order_id",
        "bill_no",
        "split_mode",
        "split_order",
        "subtotal",
        "inclusive_tax",
        "exclusive_tax",
        "discount",
        "total_payment",
        "total_due",
        "total_bill",
        "change_value",
        "refund",
        "created_at",
        "updated_at",
        "deleted_at"
    ];

    protected $casts = [                        
        "subtotal" => "double",
        "inclusive_tax" => "double",
        "exclusive_tax" => "double",
        "discount" => "double",
        "total_payment" => "double",
        "total_due" => "double",
        "total_bill" => "double",
        "change_value" => "double",
        "refund" => "double",            
    ];

    public function payments() {
        return $this->hasMany('Poska\Payments','order_bill_id');
    }

    public function orders()
    {
        return $this->belongsTo('Poska\Orders','order_id');
    }
}
