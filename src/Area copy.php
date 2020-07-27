<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Area;
use GlobalHelper as GH;

class Area extends Model
{
    use SoftDeletes;

    protected $table = "master_area";
    protected $fillable = [
        "name",
        "phone",
        "address",
        "city",
        "company_id",
        "area_id",
        "created_at",
        "updated_at",
        "deleted_at"
    ];

    protected $appends = ['upper_area_all'];

    public function upper_area()
    {
        return $this->belongsTo('App\Area','area_id');
    }

    public function getUpperAreaAllAttribute()
    {
        // return $this->area_id;
        return $this->recursive_area($this->area_id);
    }
    public function getUpperAreaAllForHeaderAttribute()
    {
        
        $data = "<b><i class='fa fa-building' style='margin-right:5px;'></i>".GH::getCurrentCompany()."<i style='margin: 0px 10px;' class='fa fa-chevron-circle-right'></i> </b>".$this->recursive_area_for_header($this->area_id);
        if($this->area_id != null)
            $data.="<i style='margin: 0px 10px;' class='fa fa-chevron-circle-right'></i><b>".$this->name."</b>";
        else
            $data.="<b>".$this->name."</b>";
        return $data;
    }

    public function recursive_area($area_id)
    {
        
        if($area_id == null) {
            return "";
        } else {
            $search = Area::where('id',$area_id)->get()->count();
            if($search > 0)
            {
                $area = Area::where('id',$area_id)->first();
                if($area->area_id == null) {
                    return "<b>".$area->name."</b>";
                } else {
                    return $this->recursive_area($area->area_id)."   >> <br><b>".$area->name."</b>";
                }
            }
            else 
            {
                return "";
            }
          }
    }

    public function recursive_area_for_header($area_id)
    {
        
        if($area_id == null) {
            return "";
        } else {
            $search = Area::where('id',$area_id)->get()->count();
            if($search > 0)
            {
                $area = Area::where('id',$area_id)->first();
                if($area->area_id == null) {
                    return "<b>".$area->name."</b>";
                } else {
                    return $this->recursive_area($area->area_id)."<i style='margin: 0px 10px;' class='fa fa-chevron-circle-right'></i><b>".$area->name."</b>";
                }
            }
            else 
            {
                return "";
            }
          }
    }

   

}
