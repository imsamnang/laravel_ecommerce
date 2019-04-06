<?php

namespace App\Model;

use App\Model\Upload as upload;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends upload
{
	use SoftDeletes;
	protected $dates = ['deleted_at'];
	protected $table = 'products';
	protected $primaryKey = 'id';
	protected $fillable = [
		'category_id',
		'product_code',
		'product_name',
		'qty',
		'price',
		'is_active',
		'description',
		'image'
	];

	public function category()
	{
		return $this->belongsTo(Category::class,'category_id','id');
	}
}
