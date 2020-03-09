<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApCopi extends Model
{
    // Table name 
	protected $table = 'ap_copi';
	//Fillable table data
	protected $fillable = [
				  'id',
				  'state_id',
				  'state',
				  'code',
				  'quarter',
				  'year',
				  'city',
				  'steak',
				  'grnd_beef',
				  'sausage',
				  'fry_chick',
				  'tuna',
				  'hgal_milk',
				  'dozen_eggs',
				  'margarine',
				  'parmesan',
				  'potatoes',
				  'bananas',
				  'lettuce',
				  'bread',
				  'orange_juice',
				  'coffee',
				  'sugar',
				  'cereal',
				  'sweet_peas',
				  'peaches',
				  'klnx',
				  'cascade',
				  'cooking_oil',
				  'frozn_meal',
				  'frozn_corn',
				  'potato_chips',
				  'coke',
				  'apt_rent',
				  'home_price',
				  'mort_rate',
				  'home_pi',
				  'all_elect',
				  'part_elect',
				  'other_energy',
				  'total_energy',
				  'phone',
				  'tire_bal',
				  'gasoline',
				  'optometrist',
				  'doctor',
				  'dentist',
				  'ibuprofen',
				  'prescription_drug',
				  'hmbgr_sand',
				  'pizza',
				  '2_pc_chick',
				  'hair_cut',
				  'beaut_salon',
				  'toothpaste',
				  'shampoo',
				  'dry_clean',
				  'mens_shirt',
				  'boys_jeans',
				  'womens_slacks',
				  'washr_repr',
				  'newspaper',
				  'movie',
				  'yoga',
				  'tenns_balls',
				  'vet_services',
				  'beer',
				  'wine',
				  'created_at',
				  'updated_at'
				  ];
				  
				  //One to Many Relationship with ApState
				  public function state(){
					  return $this->belongsTo('App\ApState');
				  }
}
