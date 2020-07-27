<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rounding extends Model
{
    use SoftDeletes;

    protected $table = "master_rounding";
    protected $fillable = [
        "rounding_name",
        "digit",
        "direction",
        "created_at",
        "updated_at",
        "deleted_at"
    ];

}
