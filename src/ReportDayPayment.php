<?php

namespace Poska;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReportDayPayment extends Model
{
    use SoftDeletes;

    protected $table = "report_day_payment";
    protected $fillable = [
        "id",
        "company_id",
        "business_date",
        "session_id",
        "payment_method_id",
        "payment_method_name",
        "payment_method_qty",
        "payment_method_value",
        "payment_method_value_void",
        "payment_method_value_refund",
        "restaurant_id",
        "restaurant_name",
        "revenue_id",
        "revenue_name",
        "created_at",
        "updated_at",
        "deleted_at"
    ];

    protected $casts = [
        "payment_method_value" => "double",
        "payment_method_value_void"  => "double",
        "payment_method_value_refund"  => "double"
    ];

}
