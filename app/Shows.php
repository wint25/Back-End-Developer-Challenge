<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shows extends Model
{
    // Fillable table values
	protected $fillable = [
           'season',
           'episode',
           'quote',
		   'user_id',
        ];
}
