<?php

namespace Poska;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Place extends Model
{
    use SoftDeletes;

    protected $table = "master_place";
    protected $fillable = [
        "restaurant_id",
        "revenue_id",
        "place_id",
        "place_name",
        "created_at",
        "updated_at",
        "deleted_at"
    ];
}
