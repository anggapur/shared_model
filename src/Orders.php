<?php

namespace Poska;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Orders extends Model
{
    use SoftDeletes;

    protected $table = "orders";
    protected $fillable = [
        "open_employee_id",
        "close_employee_id",
        "order_type",
        "persons",
        "order_status",
        "session_id",
        "subtotal",
        "grand_total",
        "discount_total",
        "tax_inclusive",
        "tax_exclusive",
        "tax_total",
        "rounding",
        "revenue_id",
        "rest_id",
        "table_id",
        "split_number",
        "split_state",
        "business_date",
        "pax",
        "customer_id",
        "customer_name",
        "phone",
        "address",
        "created_at",
        "updated_at",
        "deleted_at"
    ];
}
