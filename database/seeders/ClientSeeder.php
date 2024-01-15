<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client;
use Faker\Factory as Faker;

class ClientSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Adjust the number based on how many clients you want to seed
        for ($i = 0; $i < 10; $i++) {
            $isCompany = $faker->boolean;
            $client = Client::create([
                'user_id' => 2, // Assuming a user with ID 1 is the owner of these clients
                'company' => $isCompany,
                'company_name' => $faker->company,
                'kvk_number' => $faker->randomNumber(8),
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'street' => $faker->streetName,
                'house_number' => $faker->buildingNumber,
                'postcode' => $faker->postcode,
                'city' => $faker->city,
                'email' => $faker->unique()->safeEmail,
                'phone_number' => $faker->phoneNumber,
                'function' => $faker->jobTitle,
            ]);
        }
    }
}
