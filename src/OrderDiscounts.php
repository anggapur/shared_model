<?php

namespace Poska;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderDiscounts extends Model
{
    use SoftDeletes;

    protected $table = "order_discounts";
    protected $fillable = [
        "order_id",
        "discount_custom",
        "discount_id",
        "discount_name",
        "discount_type",
        "discount_value",
        "discount",
        "created_at",
        "updated_at",
        "deleted_at"
    ];
    protected $casts = [                                        
        "discount_value" => "double",
        "discount"=> "double",        
    ];
}
