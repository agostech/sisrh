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
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->date('data_nasc');
            $table->enum('sexo', ['f', 'm', 'o']);
            $table->string('email')->unique();
            $table->string('telefone', 15);
            $table->char('cpf', 11)->unique();
            $table->date('data_contratacao');
            $table->date('data_desligamento')->nullable();
            $table->string('foto')->nullable();
            $table->decimal('salario', 10,2)->nullable();
            $table->foreignId('departamento_id')->constrained()->onDelete('restrict')->onUpdate('restrict');
            $table->foreignId('cargo_id')->constrained()->onDelete('restrict')->onUpdate('restrict');
            $table->foreignId('user_id')->constrained()->onDelete('restrict')->onUpdate('restrict');
            $table->enum('status', ['on', 'off']);
            $table->timestamps();
        });

        // Inserir cinco registros fictícios de funcionários
        DB::table('funcionarios')->insert([
            [
                'nome' => 'Funcionario A',
                'data_nasc' => '1990-01-01',
                'sexo' => 'm',
                'email' => 'funcionarioA@gmail.com',
                'telefone' => '123456789',
                'cpf' => '12345678901',
                'data_contratacao' => '2020-01-01',
                'data_desligamento' => '2050-01-01',
                'foto' => null,
                'salario' => 5000.00,
                'departamento_id' => 1, // Substitua pelo ID do departamento desejado
                'cargo_id' => 1, // Substitua pelo ID do cargo desejado
                'user_id' => 1, // Substitua pelo ID do usuário desejado
                'status' => 'on',
            ],
            [
                'nome' => 'Funcionario B',
                'data_nasc' => '1985-02-15',
                'sexo' => 'f',
                'email' => 'funcionarioB@gmail.com',
                'telefone' => '987654321',
                'cpf' => '98765432102',
                'data_contratacao' => '2018-05-20',
                'data_desligamento' => '2022-03-10',
                'foto' => null,
                'salario' => 6000.00,
                'departamento_id' => 2, // Substitua pelo ID do departamento desejado
                'cargo_id' => 2, // Substitua pelo ID do cargo desejado
                'user_id' => 2, // Substitua pelo ID do usuário desejado
                'status' => 'on',
            ],
            [
                'nome' => 'Funcionario C',
                'data_nasc' => '1992-06-20',
                'sexo' => 'm',
                'email' => 'funcionarioC@gmail.com',
                'telefone' => '555555555',
                'cpf' => '55555555503',
                'data_contratacao' => '2021-03-01',
                'data_desligamento' => '2050-01-01',
                'foto' => null,
                'salario' => 7000.00,
                'departamento_id' => 3, // Substitua pelo ID do departamento desejado
                'cargo_id' => 3, // Substitua pelo ID do cargo desejado
                'user_id' => 3, // Substitua pelo ID do usuário desejado
                'status' => 'on',
            ],
            [
                'nome' => 'Funcionario D',
                'data_nasc' => '1988-11-10',
                'sexo' => 'm',
                'email' => 'funcionarioD@gmail.com',
                'telefone' => '987654321',
                'cpf' => '98765432104',
                'data_contratacao' => '2019-04-15',
                'data_desligamento' => '2050-01-01',
                'foto' => null,
                'salario' => 5500.00,
                'departamento_id' => 4, // Substitua pelo ID do departamento desejado
                'cargo_id' => 4, // Substitua pelo ID do cargo desejado
                'user_id' => 4, // Substitua pelo ID do usuário desejado
                'status' => 'on',
            ],
            [
                'nome' => 'Funcionario E',
                'data_nasc' => '1995-08-25',
                'sexo' => 'f',
                'email' => 'funcionarioE@gmail.com',
                'telefone' => '777777777',
                'cpf' => '77777777705',
                'data_contratacao' => '2022-02-10',
                'data_desligamento' => '2050-01-01',
                'foto' => null,
                'salario' => 6500.00,
                'departamento_id' => 5, // Substitua pelo ID do departamento desejado
                'cargo_id' => 5, // Substitua pelo ID do cargo desejado
                'user_id' => 5, // Substitua pelo ID do usuário desejado
                'status' => 'on',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('funcionarios');
    }
};
