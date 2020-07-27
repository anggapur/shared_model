<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MTMRevenueCenterEmployee extends Model
{
    use SoftDeletes;

    protected $table = "mtm_revenue_center_employee";
    protected $fillable = [
        "revenue_center_id",
        "employee_id",
        "created_at",
        "updated_at",
        "deleted_at"
    ];
}
