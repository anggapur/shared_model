<?php

namespace Poska;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Table extends Model
{
    use SoftDeletes;

    protected $table = "master_place";
    protected $fillable = [
        "restaurant_id",
        "revenue_id",
        "table_id",
        "table_name",
        "table_type",
        "rotate_state",
        "x_pos",
        "y_pos",
        "place_id",
        "created_at",
        "updated_at",
        "deleted_at"
    ];
}
