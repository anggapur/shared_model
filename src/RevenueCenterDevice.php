<?php

namespace Poska;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RevenueCenterDevice extends Model
{
    use SoftDeletes;

    protected $table = "master_revenue_center_device";
    protected $fillable = [        
        "serial_number_device",
        "revenue_center_id",
        "information",
        "created_at",
        "updated_at",
        "deleted_at"
    ];

    public function revenue_center()
    {
        return $this->belongsTo('Poska\RevenueCenter','revenue_center_id');
    }
}
