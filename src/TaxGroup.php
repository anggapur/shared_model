<?php

namespace Poska;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TaxGroup extends Model
{
    use SoftDeletes;

    protected $table = "master_tax_group";
    protected $fillable = [
        "tax_group_name",
        "company_id",
        "area_id",
        "restaurant_id",
        "created_at",
        "updated_at",
        "deleted_at"
    ];

    public function tax_group_item() {
        return $this->hasMany('Poska\MTMTaxGroupTax','tax_group_id');
    }
    
}
