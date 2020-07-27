<?php

namespace Poska;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModifierGroup extends Model
{
    use SoftDeletes;

    protected $table = "master_modifier_group";
    protected $fillable = [
        "modifier_group_name",
        "min_choose",
        "max_choose",
        "company_id",
        "area_id",
        "restaurant_id",
        "created_at",
        "updated_at",
        "deleted_at"
    ];

    public function modifier_items()
    {
        return $this->belongsToMany('Poska\ModifierItem', 'mtm_modifier_group_modifier_item', 'modifier_group_id', 'modifier_item_id');
    }

    public function mtm_modifier_items() {
        return $this->hasMany('Poska\MTMModiferGroupModifierItem','modifier_group_id');
        
    }
}
