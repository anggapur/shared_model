<?php

namespace Poska;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MTMModiferGroupModifierItem extends Model
{
    use SoftDeletes;

    protected $table = "mtm_modifier_group_modifier_item";
    protected $fillable = [
        "modifier_group_id",
        "modifier_item_id",
        "price",
        "company_id",
        "area_id",
        "restaurant_id",
        "created_at",
        "updated_at",
        "deleted_at"
    ];

    protected $appends = ['modifier_item_name'];

    public function getModifierItemNameAttribute()
    {
        return $this->modifier_item->modifier_item_name;
    }

    public function modifier_item() {
        return $this->belongsTo('App\ModifierItem','modifier_item_id');
    }

}
