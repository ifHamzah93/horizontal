<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
	protected $table = "roles";

	protected $fillable = [
        'title', 'active', 'created_at', 'updated_at'
    ];
}
