<?php

namespace Poska;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Restaurant extends Model
{
    use SoftDeletes;

    protected $table = "master_restaurant";
    protected $fillable = [
        "name",
        "restaurant_code",
        "phone",
        "address",
        "city",
        "currency",
        "company_id",
        "area_id",
        "rounding_id",
        "sales_type_id",
        "created_at",
        "updated_at",
        "deleted_at"
    ];

    public function sessions()
    {
        return $this->belongsToMany('Poska\Session', 'mtm_restaurant_session', 'restaurant_id', 'session_id');
    }

    public function payment_methods()
    {
        return $this->belongsToMany('Poska\PaymentMethod', 'mtm_restaurant_payment_method', 'restaurant_id', 'payment_method_id');
    }

    public function sales_type()
    {
        return $this->belongsToMany('Poska\SalesType','sales_type_id');
    }

}
