<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class LanguagesSeeder extends Seeder
{

    protected $arr = [
        ['language_name' => 'nước 1'],
        ['language_name' => 'nước 2'],
        ['language_name' => 'nước 3'],
        ['language_name' => 'nước 4'],
        ['language_name' => 'nước 5'],
        ['language_name' => 'nước 6'],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->arr as  $value) {
            DB::table('languages')->insert([
                'language_name' => $value["language_name"],
            ]);
        }
    }
}
