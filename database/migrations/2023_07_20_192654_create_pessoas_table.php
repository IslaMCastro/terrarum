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
            $table->string('nome');
            $table->bigInteger('cpfcnpj')->unique();
            $table->bigInteger('cep');
            $table->integer('numero');
            $table->string('email');
            $table->string('telefone');
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
