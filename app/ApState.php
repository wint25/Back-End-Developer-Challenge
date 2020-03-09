<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApState extends Model
{
    //Fillable table data
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
	//One to Many Relationship with ApCopi		
	public function copi(){
		return $this->hasMany('App\ApCopi', 'state_id');
	}
}
