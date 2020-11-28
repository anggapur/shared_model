<?php

namespace Poska;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use SoftDeletes;

    protected $table = "master_item";
    protected $fillable = [
        "item_name",
        "item_image",
        "is_package",
        "category_id",
        "company_id",
        "area_id",
        "restaurant_id",
        "created_at",
        "updated_at",
        "deleted_at"
    ];

    public function category() {
        return $this->belongsTo('Poska\Category','category_id');
    }

    public function item_detail() {
        return $this->hasMany('Poska\ItemDetail','parent_item_id');
    }

    public function modifier_groups()
    {
        return $this->belongsToMany('Poska\ModifierGroup', 'mtm_item_modifier_group', 'item_id', 'modifier_group_id');
    }

    public function sales_type_item() {
        return $this->hasMany('Poska\MTMSalesTypeItem','item_id');
    }
}
