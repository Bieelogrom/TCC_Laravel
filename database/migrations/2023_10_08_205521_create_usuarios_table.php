<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nomeUsuario', 100);
            $table->string('apelidoUsuario', 30)->unique()->nullable();
            $table->string('emailUsuario', 125)->unique();
            $table->string('numeroUsuario', 22)->unique();
            $table->string('senhaUsuario', 100)->unique();
            $table->date('nascimentoUsuario');
            $table->string('fotousuario')->nullable();
            $table->string('capaUsuario')->nullable();
            $table->integer('statusConta')->default('1');
            $table->integer('nivelConta')->default('1');
            $table->integer('tipoConta')->nullable();;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
