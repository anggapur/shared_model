<?php

namespace Poska;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Encore\Admin\Traits\AdminBuilder;
use App\ModelTreeNew;

class Category extends Model
{
    use SoftDeletes;
    use ModelTreeNew, AdminBuilder;

    protected $table = "master_category";
    protected $fillable = [
        "category_name",
        "category_id",
        "company_id",
        "area_id",
        "restaurant_id",
        "created_at",
        "updated_at",
        "deleted_at"
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setParentColumn('category_id');
        $this->setOrderColumn('order');
        $this->setTitleColumn('category_name');
    }
}
