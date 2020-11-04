<?php

namespace Poska;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BillGeneration extends Model
{
    use SoftDeletes;

    protected $table = "master_bill_generation";
    protected $fillable = [
        "revenue_center_id",        
        "latest_bill_number",        
        "latest_bill", 
        "created_at",
        "updated_at",
        "deleted_at"
    ];



    public function revenue_center()
    {
        return $this->belongsTo('Poska\RevenueCenter','revenue_center_id');
    }
}
