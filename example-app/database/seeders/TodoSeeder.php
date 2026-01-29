<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Todo;
class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Dades falses
        Todo::create([
            "title" => "Siseñor",
            "completed"=> false,
        ]);

        Todo::create([
            "title"=> "Pe",
            "completed"=> false,
        ]);

        Todo::create([
            "title"=> "Proba seeder",
            "completed"=> false,
        ]);
    }
}
