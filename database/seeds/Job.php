<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class Job extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // data faker indonesia
        $faker = Faker::create('id_ID');
 
        // membuat data dummy sebanyak 10 record
        for($x = 1; $x <= 10; $x++){
 
        	// insert data dummy pegawai dengan faker
        	DB::table('job')->insert([
        		'namadokumen' => $faker->name,
                'keterangan' => $faker->text($maxNbChars = 200),
                'harga' => $faker->numberBetween(50000,200000),
                'created_at' => $faker->dateTimeThisYear($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTimeThisYear($max = 'now', $timezone = null),
        	]);
        }
    }
}