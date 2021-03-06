<?php

namespace Poska;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RevenueCenter extends Model
{
    use SoftDeletes;

    protected $table = "master_revenue_center";
    protected $fillable = [
        "name",
        "is_active",
        "restaurant_id",
        "revenue_type",
        "created_at",
        "updated_at",
        "deleted_at"
    ];

    public function employees()
    {
        return $this->belongsToMany('Poska\Employee', 'mtm_revenue_center_employee', 'revenue_center_id', 'employee_id');
    }

    public function items()
    {
        return $this->belongsToMany('Poska\Item', 'mtm_revenue_center_item', 'revenue_center_id', 'item_id');
    }
}
