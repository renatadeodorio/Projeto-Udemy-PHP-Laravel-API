<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SiteContato;
use Database\Factories\SiteContatoFactory;
use Faker\Factory;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // SiteContato::create([
        //     'nome' => 'João',
        //     'telefone' =>'11-9999.9999',
        //     'email' => 'joao@teste.com.br',
        //     'motivo_contato' => 1,
        //     'mensagem' => 'Gostaria de orçamento'
        // ]);

        SiteContato::factory()->count(100)->create();
    }
}
