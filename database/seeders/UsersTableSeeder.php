<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

use Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([
		  'name' => 'Test Api',
		  'email' => 'api@test.com',
		  'password' => Hash::make('1234')
		]);
    }
}