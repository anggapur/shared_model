<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MTMTaxGroupTax extends Model
{
    use SoftDeletes;

    protected $table = "mtm_tax_group_tax";
    protected $fillable = [
        "tax_group_id",
        "tax_id",
        "order_sequence",
        "based_on",
        "created_at",
        "updated_at",
        "deleted_at"
    ];
    protected $appends = ['tax_name'];


    public function getTaxNameAttribute()
    {
        // return $this->area_id;
        return $this->tax->tax_name;
    }

    public function tax() {
        return $this->belongsTo('App\Tax','tax_id');
    }


}
