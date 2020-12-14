<?php

namespace Poska;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReportDaySales extends Model
{
    use SoftDeletes;

    protected $table = "report_day_sales";
    protected $fillable = [
        "id",
        "company_id",
        "business_date",
        "session_id",
        "subtotal",
        "grand_total",
        "discount_total",
        "tax_total",
        "rounding",
        "tax_inclusive",
        "tax_exclusive",
        "void_item",
        "void_item_count",
        "refund_item",
        "refund_item_count",
        "transaction_count",
        "bill_count",
        "restaurant_id",
        "restaurant_name",
        "revenue_id",
        "revenue_name",
        "created_at",
        "updated_at",
        "deleted_at"
    ];
}
