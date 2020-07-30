<?php

namespace Poska;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MTMRestaurantPaymentMethod extends Model
{
    use SoftDeletes;

    protected $table = "mtm_restaurant_payment_method";
    protected $fillable = [
        "restaurant_id",
        "session_id",
        "created_at",
        "updated_at",
        "deleted_at"
    ];
}
