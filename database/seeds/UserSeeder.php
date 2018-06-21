<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Emiliano',
            'email' => 'emi@davinci.com',
            'nivel' => 'admin',
            'estado' => 'activo',
            'password' => \Hash::make('123123')
        ]);
        User::create([
            'name' => 'Santiago',
            'email' => 'santi@davinci.com',
            'nivel' => 'user',
            'estado' => 'activo',
            'password' => \Hash::make('123456')
        ]);
    	User::create([
    		'name' => 'Eduardo Jose Gutierrez',
    		'email' => 'edu_lobo_1977@altavista.com',
    		'nivel' => 'user',
    		'estado' => 'activo',
    		'password' => \Hash::make('123321')
    	]);
    	User::create([
    		'name' => 'Blanca Barragan',
    		'email' => 'blanca_2002@yahoo.com',
    		'avatar' => 'avatar/blanca.jpg',
    		'nivel' => 'user',
    		'estado' => 'inactivo',
    		'password' => \Hash::make('123321')
    	]);
    	User::create([
    		'name' => 'Sonia Esperanza',
    		'email' => 'sonia.esperanza@gmail.com',
    		'avatar' => 'avatar/sonia.jpg',
    		'nivel' => 'user',
    		'estado' => 'activo',
    		'password' => \Hash::make('123321')
    	]);
    	User::create([
    		'name' => 'Victor Ramirez',
    		'email' => 'victor.r.1974@gmail.com',
    		'nivel' => 'user',
    		'estado' => 'activo',
    		'password' => \Hash::make('123321')
    	]);
    	User::create([
    		'name' => 'Fabiana Godoy ',
    		'email' => 'fabby_godoy@yahoo.com',
    		'nivel' => 'user',
    		'estado' => 'activo',
    		'password' => \Hash::make('123321')
    	]);
    	User::create([
    		'name' => 'Marisela Navas',
    		'email' => 'marinavas1986@gmail.com',
    		'avatar' => 'avatar/marisela.jpg',
    		'nivel' => 'user',
    		'estado' => 'activo',
    		'password' => \Hash::make('123321')
    	]);
    	User::create([
    		'name' => 'Farida Hussene',
    		'email' => 'frida.hussene@terra.com',
    		'nivel' => 'user',
    		'estado' => 'activo',
    		'password' => \Hash::make('123321')
    	]);
    	User::create([
    		'name' => 'Flavio Chavez',
    		'email' => 'flaflafla2014@yahoo.com.ar',
    		'avatar' => 'avatar/flavio.jpg',
    		'nivel' => 'user',
    		'estado' => 'activo',
    		'password' => \Hash::make('123321')
    	]);
    }
}
