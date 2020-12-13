<?php

namespace Poska;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderDetailTaxes extends Model
{
    use SoftDeletes;

    protected $table = "order_detail_taxes";
    protected $fillable = [
        "order_detail_id",
        "tax_id",
        "tax_name",
        "tax_type",
        "tax_value",
        "tax",
        "created_at",
        "updated_at",
        "deleted_at"
    ];
}
