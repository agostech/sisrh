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
        Schema::create('beneficio_funcionario', function (Blueprint $table) {
            $table->foreignId('beneficio_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('funcionario_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->primary('beneficio_id', 'funcionario_id');
            $table->timestamps();
        });

        DB::table('beneficio_funcionario')->insert([
            [
                'beneficio_id' => 1, // Substitua pelo ID do benefício desejado
                'funcionario_id' => 1, // Substitua pelo ID do funcionário desejado
            ],
            [
                'beneficio_id' => 2, // Substitua pelo ID do benefício desejado
                'funcionario_id' => 2, // Substitua pelo ID do funcionário desejado
            ],
            [
                'beneficio_id' => 3, // Substitua pelo ID do benefício desejado
                'funcionario_id' => 3, // Substitua pelo ID do funcionário desejado
            ],
            [
                'beneficio_id' => 4, // Substitua pelo ID do benefício desejado
                'funcionario_id' => 4, // Substitua pelo ID do funcionário desejado
            ],
            [
                'beneficio_id' => 5, // Substitua pelo ID do benefício desejado
                'funcionario_id' => 5, // Substitua pelo ID do funcionário desejado
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beneficio_funcionario');
    }
};
