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
    		'email' => 'emi@bronto.com',
    		'password' => \Hash::make('123123')
    	]);
    }
}
