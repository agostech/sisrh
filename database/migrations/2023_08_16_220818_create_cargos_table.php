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
        Schema::create('cargos', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->timestamps();
        });

        // Inserir três cargos fictícios
        DB::table('cargos')->insert([
            ['descricao' => 'Cargo A'],
            ['descricao' => 'Cargo B'],
            ['descricao' => 'Cargo C'],
            ['descricao' => 'Cargo D'],
            ['descricao' => 'Cargo E'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cargos');
    }
};
