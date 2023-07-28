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
        Schema::create('locals', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("coordenada",50);
            $table->bigInteger("valorcontrato",50);
            $table->string("setor",50);             
            $table->unsignedBigInteger('cadastro_id');
            $table->foreign('cadastro_id')->references('id')->on('cadastro');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locals');
    }
};
