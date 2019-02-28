<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder {
/**
* Run the database seeds.
*
* @return void
*/
    public function run()
    {
        Model::unguard();
        $this->call('ProdutoTableSeeder');
    }
}

class ProdutoTableSeeder extends Seeder {
    public function run()
    {
        //gerar aleatorio
        DB::table('produtos')->insert([
            'nome' => Str::random(10),
            'quantidade' => rand(1,10),
            'valor' => rand(1,10)*0.01,
            'descricao' => Str::random(10)
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Fogão',
            'quantidade' => 4,
            'valor' => 400.00,
            'descricao' => 'Fogão de 4 bocas industrial'
        ]);
        
}
}