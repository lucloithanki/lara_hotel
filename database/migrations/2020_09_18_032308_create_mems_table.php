<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mems', function (Blueprint $table) {
            $table->id('id_mem');
            $table->foreignId('id_room');
            $table->string('u_name');
            $table->char('password');
            $table->string('email');
            $table->bigInteger('phone');
            $table->string('address');
            $table->date('birthday');
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
        Schema::dropIfExists('mems');
    }
}
