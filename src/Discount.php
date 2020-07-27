<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Discount extends Model
{
    use SoftDeletes;

    protected $table = "master_discount";
    protected $fillable = [
        "discount_name",
        "discount_type",
        "discount_value",
        "is_active",
        "max",
        "min",
        "start_date",
        "end_date",
        "company_id",
        "area_id",
        "restaurant_id",
        "created_at",
        "updated_at",
        "deleted_at"
    ];
}
