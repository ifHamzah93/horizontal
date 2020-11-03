<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
	protected $table = "users";

	protected $fillable = [
        'image_name', 'name', 'email', 'username' , 'password', 'role', 'active', 'created_at', 'updated_at'
    ];
}
