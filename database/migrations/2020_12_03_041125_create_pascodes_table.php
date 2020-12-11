<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePascodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pascodes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('pascode')->unique();
            $table->integer('status')->default(1)->comment('1=blm digunakan, 2=digunakan');
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
        Schema::dropIfExists('pascodes');
    }
}
