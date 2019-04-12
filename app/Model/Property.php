<?php

namespace App\Model;

use App\Model\Upload as Eloquent;
use Illuminate\Database\Eloquent\Model;

class Property extends Eloquent
{
	protected $primaryKey = 'id';
	protected $table = 'properties';
	protected $fillable = [
		'user_id',
		'category_id',
		'parent_id',
		'title',
		'size',
		'price',
		'description',
		'name',
		'phone',
		'email',
		'province',
		'district',
		'commune',
		'location',
	];
}
