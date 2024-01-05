<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {   
        #Estructura tabla posts
        Schema::create('posts', function (Blueprint $table) {
            #Campos tabla posts
            $table->id();

            $table->unsignedBigInteger('user_id'); //Campo foraneo
            $table->string('title');
            $table->string('slug')->unique(); //Campo unico
            $table->text('content');

            #Relacion tabla usuarios
            $table->foreign('user_id')->references('id')->on('users');

            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
