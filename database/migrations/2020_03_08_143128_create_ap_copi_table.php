<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApCopiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ap_copi', function (Blueprint $table) {
			  $table->id();
			  $table->integer('state_id')->unsigned()->nullable();
			  $table->string('state', 255)->nullable();
			  $table->string('code', 2)->nullable();
			  $table->string('quarter',2)->nullable();
			  $table->integer('year')->unsigned()->nullable();
			  $table->string('city',255)->nullable();
			  $table->string('steak',11)->nullable();
			  $table->string('grnd_beef',11)->nullable();
			  $table->string('sausage',11)->nullable();
			  $table->string('fry_chick',11)->nullable();
			  $table->string('tuna',11)->nullable();
			  $table->string('hgal_milk',11)->nullable();
			  $table->string('dozen_eggs',11)->nullable();
			  $table->string('margarine',11)->nullable();
			  $table->string('parmesan',11)->nullable();
			  $table->string('potatoes',11)->nullable();
			  $table->string('bananas',11)->nullable();
			  $table->string('lettuce',11)->nullable();
			  $table->string('bread',11)->nullable();
			  $table->string('orange_juice',11)->nullable();
			  $table->string('coffee',11)->nullable();
			  $table->string('sugar',11)->nullable();
			  $table->string('cereal',11)->nullable();
			  $table->string('sweet_peas',11)->nullable();
			  $table->string('peaches',11)->nullable();
			  $table->string('klnx',11)->nullable();
			  $table->string('cascade',11)->nullable();
			  $table->string('cooking_oil',11)->nullable();
			  $table->string('frozn_meal',11)->nullable();
			  $table->string('frozn_corn',11)->nullable();
			  $table->string('potato_chips',11)->nullable();
			  $table->string('coke',11)->nullable();
			  $table->string('apt_rent',11)->nullable();
			  $table->string('home_price',11)->nullable();
			  $table->string('mort_rate',11)->nullable();
			  $table->string('home_pi',11)->nullable();
			  $table->string('all_elect',11)->nullable();
			  $table->string('part_elect',11)->nullable();
			  $table->string('other_energy',11)->nullable();
			  $table->string('total_energy',11)->nullable();
			  $table->string('phone',11)->nullable();
			  $table->string('tire_bal',11)->nullable();
			  $table->string('gasoline',11)->nullable();
			  $table->string('optometrist',11)->nullable();
			  $table->string('doctor',11)->nullable();
			  $table->string('dentist',11)->nullable();
			  $table->string('ibuprofen',11)->nullable();
			  $table->string('prescription_drug',11)->nullable();
			  $table->string('hmbgr_sand',11)->nullable();
			  $table->string('pizza',11)->nullable();
			  $table->string('2_pc_chick',11)->nullable();
			  $table->string('hair_cut',11)->nullable();
			  $table->string('beaut_salon',11)->nullable();
			  $table->string('toothpaste',11)->nullable();
			  $table->string('shampoo',11)->nullable();
			  $table->string('dry_clean',11)->nullable();
			  $table->string('mens_shirt',11)->nullable();
			  $table->string('boys_jeans',11)->nullable();
			  $table->string('womens_slacks',11)->nullable();
			  $table->string('washr_repr',11)->nullable();
			  $table->string('newspaper',11)->nullable();
			  $table->string('movie',11)->nullable();
			  $table->string('yoga',11)->nullable();
			  $table->string('tenns_balls',11)->nullable();
			  $table->string('vet_services',11)->nullable();
			  $table->string('beer',11)->nullable();
			  $table->string('wine',11)->nullable();
			  $table->timestamp('created_at')->nullable();
			  $table->timestamp('updated_at')->nullable();
			  
        });
		
		DB::unprepared(File::get(base_path() . '/database/seeds/ap_copi.sql'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ap_copi');
    }
}
