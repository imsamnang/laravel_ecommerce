<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PropertyGallery extends Model
{
	protected $table = 'property_galleries';
	protected $fillable = [
		'property_id',
		'gallery_image'
	];
}
