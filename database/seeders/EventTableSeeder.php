<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('events')->insert([
		  'artist' => 'Kygo',
		  'location' => 'Berlin, Germany',
		  'price' => '589.89',
		  'cover_url' => 'https://ticket-api.oo/images/covers/kygo.jpg',
		  'limit' => '500',
		  'assistants' => '158',
		  'event_date' => '2021-09-17'
		]);
    	DB::table('events')->insert([
		  'artist' => 'Justin Bieber',
		  'location' => 'Sidney, Australia',
		  'price' => '214.39',
		  'cover_url' => 'https://ticket-api.oo/images/covers/justinbieber.jpg',
		  'limit' => '5000',
		  'assistants' => '958',
		  'event_date' => '2021-11-23'
		]);
    	DB::table('events')->insert([
		  'artist' => 'Shakira',
		  'location' => 'New York, USA',
		  'price' => '145.00',
		  'cover_url' => 'https://ticket-api.oo/images/covers/shakira.png',
		  'limit' => '250',
		  'assistants' => '32',
		  'event_date' => '2021-05-11'
		]);
    	DB::table('events')->insert([
		  'artist' => 'Lady Gaga',
		  'location' => 'Tokio, Japan',
		  'price' => '759.89',
		  'cover_url' => 'https://ticket-api.oo/images/covers/ladygaga.png',
		  'limit' => '1500',
		  'assistants' => '149',
		  'event_date' => '2021-08-11'
		]);
    	DB::table('events')->insert([
		  'artist' => 'Bruno Mars',
		  'location' => 'Barcelona, Spain',
		  'price' => '249.00',
		  'cover_url' => 'https://ticket-api.oo/images/covers/brunomars.jpg',
		  'limit' => '50000',
		  'assistants' => '5598',
		  'event_date' => '2021-02-11'
		]);
    }
}
