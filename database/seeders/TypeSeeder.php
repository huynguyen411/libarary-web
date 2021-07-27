<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    protected $arr = [
        [
            "code" => "000",
            "name" => "Generalities",
        ],
        [
            "code" => "100",
            "name" => "Philosophy and Psychology",
        ],
        [
            "code" => "200",
            "name" => "Religion",
        ],
        [
            "code" => "300",
            "name" => "Social Sciences",
        ],
        [
            "code" => "400",
            "name" => "Language",
        ],
        [
            "code" => "500",
            "name" => "Natural Sciences and Math",
        ],
        [
            "code" => "600",
            "name" => "Technology",
        ],
        [
            "code" => "700",
            "name" => "The Arts",
        ],
        [
            "code" => "800",
            "name" => "Literature",
        ],
        [
            "code" => "900",
            "name" => "Geography, History and Biography",
        ],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        global $arr;
        foreach ($this->arr as  $value) {
            DB::table('types')->insert([
                'code' => $value["code"],
                "name" => $value["name"],
                
            ]);
        }
    }
}
