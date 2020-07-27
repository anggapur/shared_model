<?php

namespace Poska;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use SoftDeletes;

    protected $table = "master_company";
    protected $fillable = [
        "name",
        "phone",
        "address",
        "city",
        "is_active",
        "created_at",
        "updated_at",
        "deleted_at"
    ];

    public function admin_users()
    {
        return $this->hasMany('App\AdminUsers','company_id');
    }
}
