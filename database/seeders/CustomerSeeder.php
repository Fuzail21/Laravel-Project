<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CustomerRegistration;

use Faker\Factory as faker;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i = 1 ; $i <=10 ; $i++){
        $customers = new CustomerRegistration;
        $customers->Name =  $faker->name;
        $customers->Email =   $faker->email;
        $customers->Password =  $faker->password;
        $customers->Country =   $faker->country;
        $customers->City =   $faker->city;
        $customers->Address =  $faker->address;
        $customers->Gender = 'Female';
        $customers->DOB =   $faker->date;
        $customers->save();
    };
    }
}
