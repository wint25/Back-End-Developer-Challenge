<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ap_states', function (Blueprint $table) {
            $table->id();
			$table->string('country', 191);
			$table->string('state', 191);
			$table->string('code', 191);
			$table->string('nickname', 191);
			$table->string('capital', 191);
			$table->string('full_width_image', 191)->nullable();
			$table->string('image_attribution', 191)->nullable();
			$table->string('alt_text', 191)->nullable();
			$table->string('image_caption', 191)->nullable();
			
            $table->timestamp('created_at')->nullable();
			$table->timestamp('updated_at')->nullable();
			$table->index('country');
			$table->index('state');
			$table->index('code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ap_states');
    }
}
