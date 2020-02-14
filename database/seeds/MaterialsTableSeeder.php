<?php

use Illuminate\Database\Seeder;

class MaterialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materials')->insert([
            'name'        => 'linha fina rosa',
            'description' => 'Linha Meada Anchor Mouliné 002',
            'price'       =>  2.30
        ]);
        DB::table('materials')->insert([
            'name'        => 'linha fina azul Escuro',
            'description' => 'Linha Meada Anchor Mouliné 012',
            'price'       =>  2.30
        ]);
        DB::table('materials')->insert([
            'name'        => 'linha fina azul bebe',
            'description' => 'Linha Meada Anchor Mouliné 010',
            'price'       =>  2.30
        ]);
        DB::table('materials')->insert([
            'name'        => 'linha fina azul marinho',
            'description' => 'Linha Meada Anchor Mouliné 011',
            'price'       =>  2.30
        ]);
        DB::table('materials')->insert([
            'name'        => 'linha fina marrom claro',
            'description' => 'Linha Meada Anchor Mouliné 088',
            'price'       =>  2.30
        ]);
        DB::table('materials')->insert([
            'name'        => 'linha fina marrom escuro',
            'description' => 'Linha Meada Anchor Mouliné 090',
            'price'       =>  2.30
        ]);
        DB::table('materials')->insert([
            'name'        => 'linha fina preta',
            'description' => 'Linha Meada Anchor Mouliné 099',
            'price'       =>  2.30
        ]);
        DB::table('materials')->insert([
            'name'        => 'linha fina verde folha',
            'description' => 'Linha Meada Anchor Mouliné 022',
            'price'       =>  2.30
        ]);
        DB::table('materials')->insert([
            'name'        => 'linha fina verde claro',
            'description' => 'Linha Meada Anchor Mouliné 020',
            'price'       =>  2.30
        ]);
        DB::table('materials')->insert([
            'name'        => 'linha fina vermelha',
            'description' => 'Linha Meada Anchor Mouliné 015',
            'price'       =>  2.30
        ]);

        DB::table('materials')->insert([
            'name'        => 'linha fina vermelha mescla',
            'description' => 'Linha Meada Anchor Mouliné 016',
            'price'       =>  2.30
        ]);

        DB::table('materials')->insert([
            'name'        => 'tesoura',
            'description' => 'tesoura padrão',
            'price'       =>  0.00
        ]);

        DB::table('materials')->insert([
            'name'        => 'agulha para bordado',
            'description' => 'ponta fina - G',
            'price'       =>  2.00
        ]);

        DB::table('materials')->insert([
            'name'        => 'Pingente Dourado',
            'description' => 'redondo 20mm',
            'price'       =>  4.87
        ]);

        DB::table('materials')->insert([
            'name'        => 'Pingente Prata',
            'description' => 'gota 25mm',
            'price'       =>  5.90
        ]);

        DB::table('materials')->insert([
            'name'        => 'Pingente Prata',
            'description' => 'chave 22mm',
            'price'       =>  5.90
        ]);

        DB::table('materials')->insert([
            'name'        => 'Pingente Prata',
            'description' => 'redondo 28mm',
            'price'       =>  5.90
        ]);

        DB::table('materials')->insert([
            'name'        => 'Carrochão',
            'description' => 'redondo 28mm',
            'price'       =>  2.90
        ]);
        DB::table('materials')->insert([
            'name'        => 'Carrochão',
            'description' => 'redondo 22mm',
            'price'       =>  2.90
        ]);
        DB::table('materials')->insert([
            'name'        => 'Carrochão',
            'description' => 'gota 25mm',
            'price'       =>  3.08
        ]);

        DB::table('materials')->insert([
            'name'        => 'Pano neoprime',
            'description' => 'por metro',
            'price'       =>  17.00
        ]);

        DB::table('materials')->insert([
            'name'        => 'Pano de saco ',
            'description' => 'guardanapo (unidade)',
            'price'       =>  5.20
        ]);

        DB::table('materials')->insert([
            'name'        => 'Esmalte de carimbo preto',
            'description' => 'born pretty importado',
            'price'       =>  15.29
        ]);

        DB::table('materials')->insert([
            'name'        => 'Esmalte de carimbo branco',
            'description' => 'born pretty importado',
            'price'       =>  15.29
        ]);

        DB::table('materials')->insert([
            'name'        => 'Base transparente',
            'description' => 'Big universo 1L',
            'price'       =>  8.00
        ]);

        DB::table('materials')->insert([
            'name'        => 'Tinta de tecido Azul',
            'description' => 'tinta a base de água',
            'price'       =>  4.50
        ]);

        DB::table('materials')->insert([
            'name'        => 'Tinta de tecido amarela',
            'description' => 'tinta a base de água',
            'price'       =>  4.50
        ]);

        DB::table('materials')->insert([
            'name'        => 'Tinta de tecido branca',
            'description' => 'tinta a base de água',
            'price'       =>  4.50
        ]);

        DB::table('materials')->insert([
            'name'        => 'Tinta de tecido vermelha',
            'description' => 'tinta a base de água',
            'price'       =>  4.50
        ]);

        DB::table('materials')->insert([
            'name'        => 'Tinta de tecido rosa',
            'description' => 'tinta a base de água',
            'price'       =>  4.50
        ]);

        DB::table('materials')->insert([
            'name'        => 'Tinta de tecido preta',
            'description' => 'tinta a base de água',
            'price'       =>  4.50
        ]);
    }
}
