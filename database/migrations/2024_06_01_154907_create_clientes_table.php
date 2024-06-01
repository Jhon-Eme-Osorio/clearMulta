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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',30);
            $table->string('apellido',30);
            $table->string('tipo_documento',4);
            $table->string('numero_identidad',25);
            $table->string('email',25);
            $table->string('telefono',10);
            $table->date('fecha_nacimiento');
            $table->string('direccion',50);
            $table->string('tipo_vehiculo',25);
            $table->string('matricula',25);
            $table->string('metodo_pago',30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
