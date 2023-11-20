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
        Schema::create('beneficios', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->enum('status',['on','off']);
            $table->timestamps();
        });

        // Inserir cinco benefícios fictícios
        DB::table('beneficios')->insert([
            ['descricao' => 'Benefício A', 'status' => 'on'],
            ['descricao' => 'Benefício B', 'status' => 'on'],
            ['descricao' => 'Benefício C', 'status' => 'on'],
            ['descricao' => 'Benefício D', 'status' => 'on'],
            ['descricao' => 'Benefício E', 'status' => 'on'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beneficios');
    }
};
