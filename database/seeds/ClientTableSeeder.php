<?php

use Illuminate\Database\Seeder;
use App\Client;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::create([
            'nombre' => 'CENTRO MAYORISTA PAPELERO TAURO S.A',
            'cod_sap' => '827650',
            'ciudad' => 'BUCARAMANGA',
            'direccion' => 'KR 17 No 16 59',
            'telefono' => '',
            'nit' => '8020081921'
        ]);
        Client::create([
            'nombre' => 'EUREKA LIBROS S A S',
            'cod_sap' => '1037161',
            'ciudad' => 'BOGOTÁ D.C.',
            'direccion' => 'KR 76 A 64 H 32 P 1',
            'telefono' => '7031014',
            'nit' => '9006770761'
        ]);
        Client::create([
            'nombre' => 'LICEO NAPOLITANO SAS',
            'cod_sap' => '1037233',
            'ciudad' => 'CALI',
            'direccion' => 'KR 11 47 22',
            'telefono' => '4421357',
            'nit' => '9004058411'
        ]);
        Client::create([
            'nombre' => 'ENTIDAD PROMOTORA DE SALUD SERVICIO',
            'cod_sap' => '1037744',
            'ciudad' => 'BOGOTÁ D.C.',
            'direccion' => 'AV LAS AMÉRICAS 23N 55',
            'telefono' => '6848686',
            'nit' => '8050011572'
        ]);
        Client::create([
            'nombre' => 'COLEGIO BRITANICO DE MONTERIA',
            'cod_sap' => '1041122',
            'ciudad' => 'MONTERIA',
            'direccion' => 'CL 65 9 100',
            'telefono' => '7852055',
            'nit' => '9009949042'
        ]);
    }
}
