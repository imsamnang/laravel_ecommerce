<?php

namespace App\Model;

use App\Model\Category;
use App\Model\Upload as upload;
use Illuminate\Database\Eloquent\Model;

class Category extends upload
{
	protected $table = 'categories';
	protected $primaryKey = 'id';
	protected $fillable = [
		'parent_id',
		'category_name',
		'description',
		'is_active',
		'image'
	];

	public function childs()
	{
		return $this->hasMany(Category::class,'parent_id','id');
	}
}
