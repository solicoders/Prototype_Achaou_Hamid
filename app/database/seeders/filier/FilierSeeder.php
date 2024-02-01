<?php

namespace Database\Seeders\filier;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("filiers")->insert([
            [
                "nom" => "Dev Mobile",
                "description" => "Developper des application  mobile en utiliser pluser technology",
            ],
            [
                "nom" => "Dev Web",
                "description" => "Developper des application  web en utiliser pluser technology",
            ]
        ]);
    }
}
