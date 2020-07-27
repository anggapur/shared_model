<?php

namespace Poska;

use Illuminate\Database\Eloquent\Model;

class AdminRoleUsers extends Model
{
    protected $table = "admin_role_users";
    protected $fillable = [
        "role_id",
        "user_id",
        "created_at",
        "updated_at"
    ];

}
