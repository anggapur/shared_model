<?php

namespace Poska;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionData extends Model
{
    use SoftDeletes;

    protected $table = "transaction_data";
    protected $fillable = [
        "transaction_type",
        "transaction_status",
        "business_date",
        "session_id",
        "transaction_data",
        "ip_address",
        "device_id",
        "app_version",
        "created_at",
        "updated_at",
        "deleted_at"
    ];


}
