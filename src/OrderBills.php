<?php

namespace Poska;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
}
