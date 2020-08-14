<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'nombre' => 'APPLICA Lenguaje 6 (TEXTO Y DIGITAL)',
            'cod_sap' => '160840',
            'linea' => 'TEXTO',
            'formato' => 'TEXTO Y DIGITAL',
            'pvp' => '95100',
            'grado' => '6',
            'area' => 'INGLES'
        ]);
        Product::create([
            'nombre' => 'GA MI ÚLTIMO VERANO (2014)',
            'cod_sap' => '159357',
            'linea' => 'LITERATURA ',
            'formato' => 'TEXTO PAPEL',
            'pvp' => '13500',
            'grado' => 'GRAN ANGULAR',
            'area' => 'LITERATURA '
        ]);
        Product::create([
            'nombre' => 'CONECTA 3.0 Naturales 7 (TEXTO Y DIGITAL)',
            'cod_sap' => '174429',
            'linea' => 'TEXTO',
            'formato' => 'TEXTO Y DIGITAL',
            'pvp' => '95500',
            'grado' => '7',
            'area' => 'CIENCIA'
        ]);
        Product::create([
            'nombre' => 'PREP FOR LIFE 3 DGB STUDENT S BOOK TEXTO PAPEL',
            'cod_sap' => '163261',
            'linea' => 'UDP',
            'formato' => 'TEXTO PAPEL',
            'pvp' => '88200',
            'grado' => '8',
            'area' => 'INGLES'
        ]);
        Product::create([
            'nombre' => 'SAVIA MATEMATICAS 5 (DIGITAL PURO)',
            'cod_sap' => '191284',
            'linea' => 'TEXTO',
            'formato' => 'DIGITAL PURO',
            'pvp' => '76400',
            'grado' => '5',
            'area' => 'MATEMATICAS'
        ]);
    }
}
