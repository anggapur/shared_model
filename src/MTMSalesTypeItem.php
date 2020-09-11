<?php

namespace Poska;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MTMSalesTypeItem extends Model
{
    use SoftDeletes;

    protected $table = "mtm_sales_type_item";
    protected $fillable = [
        "sales_type_id",
        "item_id",
        "price",
        "is_active",
        "tax_group_id",
        "discount_id",
        "created_at",
        "updated_at",
        "deleted_at"
    ];

    public function tax_group()
    {        
        return $this->belongsTo('Poska\TaxGroup','tax_group_id');
    }
}
