<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminUsers extends Model
{
    protected $table = "admin_users";
    protected $fillable = [
        "username",
        "password",
        "name",
        "avatar",
        "remember_token",
        "company_id",
        "created_at",
        "updated_at"
    ];

    public function company() {
        return $this->belongsTo('App\Company','company_id');
    }

    public function admin_role_users() {
        return $this->hasMany('App\AdminRoleUsers','user_id','id');
    }

    protected static function boot() {
        parent::boot();
    
        static::deleting(function($data) { 
            $data->admin_role_users()->delete();
        });
      }
}
