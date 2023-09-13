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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('razao_social', 200);
            $table->string('nome_fantasia', 200);
            $table->bigInteger('cnpj')->unique();
            $table->string('endereco', 200);
            $table->string('cidade', 200);
            $table->string('estado', 2);
            $table->string('pais', 8);
            $table->bigInteger('telefone');
            $table->string('email', 200);
            $table->bigInteger('cnae_principal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
