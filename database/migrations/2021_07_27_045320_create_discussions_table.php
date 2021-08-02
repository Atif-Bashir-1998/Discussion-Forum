<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscussionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discussions', function (Blueprint $table) {
            $table->id();
            $table->string('post_title');
            $table->string('user_id')->usingned();
            $table->string('written by');
            $table->longtext('description');
            $table->longtext('brief');
            $table->foreign('user_id')
                    ->reference('id')
                    ->on('users')
                    ->onDelete('cascade');
        
          
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
        Schema::dropIfExists('discussions');
    }
}
