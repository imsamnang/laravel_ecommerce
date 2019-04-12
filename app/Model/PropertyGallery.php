<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PropertyGallery extends Model
{
	use SoftDeletes;
	protected $table = 'property_galleries';
	protected $fillable = [
		'property_id',
		'gallery_image'
	];
	protected $dates = ['deleted_at'];
}
