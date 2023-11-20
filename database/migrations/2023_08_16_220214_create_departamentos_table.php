<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('departamentos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->timestamps();
        });

        // Inserir três departamentos fictícios
        DB::table('departamentos')->insert([
            ['nome' => 'Departamento A'],
            ['nome' => 'Departamento B'],
            ['nome' => 'Departamento C'],
            ['nome' => 'Departamento D'],
            ['nome' => 'Departamento E'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departamentos');
    }
};
