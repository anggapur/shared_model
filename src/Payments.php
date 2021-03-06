<?php

namespace Poska;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payments extends Model
{
    use SoftDeletes;

    protected $table = "payments";
    protected $fillable = [
        "order_bill_id",
        "payment_value",
        "payment_method_id",
        "payment_method_name",
        "created_at",
        "updated_at",
        "deleted_at"
    ];
    protected $casts = [                                        
        "payment_value" => "double",
    ];

    public function order_bill() {
        return $this->belongsTo('Poska\OrderBills','order_bill_id');
    }

    public function payment_method() {
        return $this->belongsTo('Poska\PaymentMethod','payment_method_id');
    }


}
