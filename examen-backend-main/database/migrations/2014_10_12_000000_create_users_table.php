<?php
 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('entrenadores', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('Detalles');
            $table->string('Equipo');
            $table->timestamps();
        });
    }
     
    public function down(): void
    {
        Schema::dropIfExists('entrenadores');
    }
};