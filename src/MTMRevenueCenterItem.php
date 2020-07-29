<?php

namespace Poska;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MTMRevenueCenterItem extends Model
{
    use SoftDeletes;

    protected $table = "mtm_revenue_center_item";
    protected $fillable = [
        "item_id",
        "revenue_center_id",
        "created_at",
        "updated_at",
        "deleted_at"
    ];
}
