<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabungans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nis')->unique();
            
            $table->bigInteger('class_id');
            // $table->foreign('rayons_id')->references('id')->on('rayons')->onDelete('restrict');
            //$table->date('date');
            // $table->bigInteger('rayons_id');
            // $table->string('rayon');
            $table->string('saldo')->nullable();
            $table->string('withdraw')->nullable();
            $table->string('deposit')->nullable();
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
        Schema::dropIfExists('tabungans');
    }
};
