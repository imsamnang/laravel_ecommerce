<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductGallery extends Model
{
	use SoftDeletes;
	protected $table = 'product_galleries';
	protected $primaryKey = 'id';
	protected $fillable = ['product_id','gallery_image'];

	protected $dates = ['deleted_at'];

	// public static function imageGallery($filename,$product_id)
	// {
	// 	if(Request()->hasFile($filename)){
	// 		foreach (Request()->$filename as $file) {
	// 			$filename = rand(). '.' . $file->getClientOriginalExtension();
	// 			$newFile = new ProductGallery();
	// 			$newFile->product_id = $product_id;
	// 			$newFile->gallery_image = $filename;
	// 			if($newFile->save()){
	// 				$file->move('uploads/product/galleries/',$filename);
	// 			}
	// 		}
	// 	}
	// }
}
