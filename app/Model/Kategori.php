<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
	protected $table = "kategori";

	protected $fillable = [
        'nama', 'created_at', 'updated_at'
    ];
}
