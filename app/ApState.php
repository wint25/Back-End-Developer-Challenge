<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApState extends Model
{
    //
	protected $fillable = [
			'id',
			'country',
			'state',
			'code',
			'nickname',
			'capital',
			'full_width_image',
			'image_attribution',
			'alt_text',
			'image_caption',
			'created_at',
			'updated_at'
			];
			
	public function copi(){
		return $this->hasMany(ApCopi::class);
	}
}
