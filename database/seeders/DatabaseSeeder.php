<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            BookSeeder::class,
            // TypeSeeder::class,
            // BookContentSeeder::class,
            // LanguagesSeeder::class,
            RoleSeeder::class,
            // LanguageBookSeeder::class,
            BorrowingStatusSeeder::class

        ]);
    }
}
