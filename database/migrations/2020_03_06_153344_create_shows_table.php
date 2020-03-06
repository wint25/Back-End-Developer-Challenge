<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shows', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('season')->unsigned();
			$table->integer('episode')->unsigned();
			$table->text('quote');
			$table->unsignedBigInteger('user_id');
			$table->foreign('user_id')
				  ->references('id')
				  ->on('users')
				  ->onDelete('CASCADE');
			$table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shows');
    }
}
