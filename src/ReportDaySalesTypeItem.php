<?php

namespace Poska;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReportDaySalesTypeItem extends Model
{
    use SoftDeletes;

    protected $table = "report_day_sales_type_item";
    protected $fillable = [
        "id",
        "company_id",
        "restaurant_id",
        "restaurant_name",
        "revenue_id",
        "revenue_name",
        "business_date",
        "session_id",
        "category_id",
        "category_name",
        "item_id",
        "sales_type_id",
        "sales_type_name",
        "item_name",
        "item_price",
        "item_qty",
        "item_total",
        "item_discount",
        "item_exclusive_tax",
        "item_inclusive_tax",
        "item_valid_qty",
        "item_valid",
        "item_valid_discount",
        "item_valid_inclusive_tax",
        "item_valid_exclusive_tax",
        "item_void_qty",
        "item_void",
        "item_void_discount",
        "item_void_inclusive_tax",
        "item_void_exclusive_tax",
        "item_refund_qty",
        "item_refund",
        "item_refund_discount",
        "item_refund_inclusive_tax",
        "item_refund_exclusive_tax",
        "created_at",
        "updated_at",
        "deleted_at"
    ];

    protected $casts = [
        "item_price" => "double",
        "item_qty" => "integer",
        "item_total" => "double",
        "item_discount" => "double",
        "item_exclusive_tax" => "double",
        "item_inclusive_tax" => "double",
        "item_valid_qty" => "integer",
        "item_valid" => "double",
        "item_valid_discount" => "double",
        "item_valid_inclusive_tax" => "double",
        "item_valid_exclusive_tax" => "double",
        "item_void_qty" => "integer",
        "item_void" => "double",
        "item_void_discount" => "double",
        "item_void_inclusive_tax" => "double",
        "item_void_exclusive_tax" => "double",
        "item_refund_qty" => "integer",
        "item_refund" => "double",
        "item_refund_discount" => "double",
        "item_refund_inclusive_tax" => "double",
        "item_refund_exclusive_tax" => "double",
    ];

}
