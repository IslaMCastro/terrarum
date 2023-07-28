<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**"nome","cpfcnpj","cep" ,"numero", "email", "telefone",
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id();
            $table->string('nome',30);
            $table->bigInteger('cpfcnpj',20)->unique();
            $table->integer('cep',20);
            $table->integer('numero',20);
            $table->string('email',30);
            $table->string('telefone',20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pessoas');
    }
};
