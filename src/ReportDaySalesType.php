<?php

namespace Poska;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReportDaySalesType extends Model
{
    use SoftDeletes;

    protected $table = "report_day_sales_type";
    protected $fillable = [
        "id",
        "company_id",
        "business_date",
        "session_id",
        "sales_type_id",
        "sales_type_name",
        "sales_type_value",
        "sales_type_value_void",
        "sales_type_value_refund",
        "restaurant_id",
        "restaurant_name",
        "revenue_id",
        "revenue_name",
        "created_at",
        "updated_at",
        "deleted_at"
    ];

    protected $casts = [
        "sales_type_value" => "double",
        "sales_type_value_void" => "double",
        "sales_type_value_refund" => "double",
    ];
}
