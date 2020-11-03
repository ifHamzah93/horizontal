<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Otori extends Model
{
	protected $table = "otori";

	protected $fillable = [
        'user_id', 'menu_id', 'show_menu', 'created_at', 'updated_at'
    ];
}
