<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SalesType extends Model
{
    use SoftDeletes;

    protected $table = "master_sales_type";
    protected $fillable = [
        "sales_type_name",
        "company_id",
        "area_id",
        "restaurant_id",
        "created_at",
        "updated_at",
        "deleted_at"
    ];
}
