<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'John Alexander',
	    	'last_name' => 'Llarave Herrán',
	        'email' => 'prueba@prueba.com',
            'password' => bcrypt('12345678'),
	        'role_id' => '1'
	    ]);
        User::create([
            'name' => 'Leonardo',
            'last_name' => 'Vargas',
            'email' => 'prueba@grupo-sm.com',
            'password' => bcrypt('12345678'),
            'role_id' => '2'
        ]);
    }
}
