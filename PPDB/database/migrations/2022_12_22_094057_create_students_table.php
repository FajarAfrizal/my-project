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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('nisn');
            $table->string('kelamin');
            $table->string('nama');
            $table->string('asal_sekolah');
            $table->string('asal_sekolah_text')->nullable();
            $table->string('email');
            $table->string('password');
            $table->string('no_hp');
            $table->string('no_hp_ayah');
            $table->string('no_hp_ibu');
            $table->enum('role', ['admin', 'user']);
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
        Schema::dropIfExists('students');
    }
};
