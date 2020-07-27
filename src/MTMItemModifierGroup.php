<?php

namespace Poska;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MTMItemModifierGroup extends Model
{
    protected $table = "mtm_item_modifier_group";
    protected $fillable = [
        "item_id",
        "modifier_group_id",
        "created_at",
        "updated_at",
        "deleted_at"
    ];

    
}
