<?php

namespace Poska;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderDetailModifiers extends Model
{
    use SoftDeletes;

    protected $table = "order_detail_modifiers";
    protected $fillable = [
        "order_detail_id",
        "modifier_item_id",
        "modifier_group_id",
        "modifier_item_name",
        "price",
        "created_at",
        "updated_at",
        "deleted_at"
    ];
    protected $casts = [                                        
        "price" => "double",
    ];

}
