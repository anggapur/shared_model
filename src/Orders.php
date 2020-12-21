<?php

namespace Poska;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Orders extends Model
{
    use SoftDeletes;

    protected $table = "orders";
    protected $fillable = [
        "open_employee_id",
        "close_employee_id",
        "order_type",
        "persons",
        "order_status",
        "session_id",
        "subtotal",
        "grand_total",
        "discount_total",
        "tax_inclusive",
        "tax_exclusive",
        "tax_total",
        "rounding",
        "revenue_id",
        "rest_id",
        "table_id",
        "split_number",
        "split_state",
        "business_date",
        "pax",
        "customer_id",
        "customer_name",
        "phone",
        "address",
        "created_at",
        "updated_at",
        "deleted_at"
    ];

    protected $casts = [                
        "subtotal" => "double",        
        "grand_total" => "double",        
        "discount_total" => "double",        
        "tax_inclusive" => "double",        
        "tax_exclusive" => "double",        
        "tax_total" => "double",        
        "rounding" => "double",        
    ];

    public function restaurant() {
        return $this->belongsTo('Poska\Restaurant','rest_id');
    }

    public function revenue_center() {
        return $this->belongsTo('Poska\RevenueCenter','revenue_id');
    }

    public function employee_open() {
        return $this->belongsTo('Poska\Employee','open_employee_id');
    }

    public function employee_close() {
        return $this->belongsTo('Poska\Employee','close_employee_id');
    }

    public function session() {
        return $this->belongsTo('Poska\Session','session_id');
    }
}
