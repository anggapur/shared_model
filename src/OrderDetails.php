<?php

namespace Poska;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderDetails extends Model
{
    use SoftDeletes;

    protected $table = "order_details";
    protected $fillable = [
        "order_id",
        "sales_type_id",
        "item_id",
        "item_name",
        "is_package",
        "item_status",
        "item_type",
        "item_parent_id",
        "item_num",
        "item_price",
        "discount_id",
        "split_order",
        "discount",
        "inclusive_tax",
        "exclusive_tax",
        "subtotal",
        "tax_group_id",
        "created_at",
        "updated_at",
        "deleted_at"
    ];
}
