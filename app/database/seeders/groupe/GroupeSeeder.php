<?php

namespace Database\Seeders\groupe;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("groupes")->insert([
            [
                "nom" => "101",
                "description" => "Developper mobile groupe 101",
                "filier_id" => "1"
            ],
            [
                "nom" => "102",
                "description" => "Developper mobile groupe 102",
                "filier_id" => "2"
            ],
            [
                "nom" => "101",
                "description" => "Developper web groupe 101",
                "filier_id" => "1"
            ],
            [
                "nom" => "102",
                "description" => "Developper web groupe 102",
                "filier_id" => "2"
            ],
            [
                "nom" => "103",
                "description" => "Developper web groupe 103",
                "filier_id" => "2"
            ]
        ]);
    }
}
