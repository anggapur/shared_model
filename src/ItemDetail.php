<?php

namespace Poska;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ItemDetail extends Model
{
    use SoftDeletes;

    protected $table = "master_item_detail";
    protected $fillable = [
        "parent_item_id",
        "child_item_id",
        "created_at",
        "updated_at",
        "deleted_at"
    ];

    protected $appends = ['item_name'];

    public function getItemNameAttribute()
    {
        return $this->child_item->item_name;
    }

    public function child_item() {
        return $this->belongsTo('Poska\Item','child_item_id');
    }

}
