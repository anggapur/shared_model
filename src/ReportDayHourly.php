<?php

namespace Poska;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReportDayHourly extends Model
{
    use SoftDeletes;

    protected $table = "report_day_hourly";
    protected $fillable = [
        "id",
        "company_id",
        "restaurant_id",
        "restaurant_name",
        "revenue_id",
        "revenue_name",
        "business_date",
        "session_id",
        "hour_label",
        "qty",
        "total",
        "created_at",
        "updated_at",
        "deleted_at"
    ];
}
