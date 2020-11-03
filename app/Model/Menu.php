<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
	protected $table = "dyn_menu";

	protected $fillable = [
        'title', 'icon', 'link_type', 'page_id' , 'module_name', 'url', 'dyn_group_id', 'target', 'parent_id', 'is_parent', 'show_menu', 'created_at', 'updated_at'
    ];
}
