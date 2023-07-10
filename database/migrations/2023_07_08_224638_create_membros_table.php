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
        Schema::create('membros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_setor');
            $table->string('nome', 50);
            $table->bigInteger('cpf'); 
            $table->string('cargo', 20);
            $table->string('dizimista', 20);
            $table->timestamps();

        //constraint
        $table->foreign('id_setor')->references('id')->on('setores');
       

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('membros');
    }
};