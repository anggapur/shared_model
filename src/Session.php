<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Session extends Model
{
    use SoftDeletes;

    protected $table = "master_session";
    protected $fillable = [
        "session_name",
        "created_at",
        "updated_at",
        "deleted_at"
    ];
}
