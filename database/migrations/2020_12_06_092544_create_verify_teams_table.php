<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVerifyTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verify_teams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('player_id');
            $table->string('ss_instagram');
            $table->string('ss_youtube');
            $table->string('foto_selfie');
            $table->string('foto_ktp');
            $table->string('status')->default(0);
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
        Schema::dropIfExists('verify_teams');
    }
}
