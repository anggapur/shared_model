<?php

namespace Poska;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReportDayTaxes extends Model
{
    use SoftDeletes;

    protected $table = "report_day_taxes";
    protected $fillable = [
        "id",
        "company_id",
        "business_date",
        "session_id",
        "tax_id",
        "tax_type",
        "tax_name",
        "tax_value",
        "tax_value_void",
        "tax_value_refund",
        "restaurant_id",
        "restaurant_name",
        "revenue_id",
        "revenue_name",
        "created_at",
        "updated_at",
        "deleted_at"
    ];

    protected $casts = [
        "tax_value" => "double",
        "tax_value_void" => "double",
        "tax_value_refund" => "double",
    ];
}
