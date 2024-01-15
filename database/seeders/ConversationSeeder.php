<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client;
use Faker\Factory as Faker;

class ConversationSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $clients = Client::all();

        foreach ($clients as $client) {
            for ($k = 0; $k < 2; $k++) {
                $client->conversations()->create([
                    'conversation_date' => $faker->date,
                    'conversation_time' => $faker->time,
                    'spoken_with' => $faker->name,
                    'note' => $faker->text,
                ]);
            }
        }
    }
}
