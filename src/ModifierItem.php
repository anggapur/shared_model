<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModifierItem extends Model
{
    use SoftDeletes;

    protected $table = "master_modifier_item";
    protected $fillable = [
        "modifier_item_name",
        "company_id",
        "area_id",
        "restaurant_id",
        "created_at",
        "updated_at",
        "deleted_at"
    ];
}
