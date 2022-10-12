<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Fornecedor::create([
             'nome' => 'Fornecedor 100',
             'site' => 'www.fornecedor100.example.com',
             'uf' => 'SP',
             'email' => 'fornecedor100@example.com.br'
         ]);

         Fornecedor::create([
            'nome' => 'Fornecedor 200',
            'site' => 'www.fornecedor200.example.com',
            'uf' => 'RS',
            'email' => 'fornecedor200@example.com.br'
        ]);
        Fornecedor::create([
            'nome' => 'Fornecedor 300',
            'site' => 'www.fornecedor300.example.com',
            'uf' => 'SC',
            'email' => 'fornecedor300@example.com.br'
        ]);
    }
}
