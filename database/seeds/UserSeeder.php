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
            'password' => \Hash::make('123123')
        ]);
        User::create([
            'name' => 'Santiago',
            'email' => 'santi@davinci.com',
            'password' => \Hash::make('123456')
        ]);
    	User::create([
    		'name' => 'Francis',
    		'email' => 'fran@davinci.com',
    		'password' => \Hash::make('123321')
    	]);
    }
}
