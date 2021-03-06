<?php

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
         $this->call(VaccineSeeder::class);
         $this->call(FaqSeeder::class);
         $this->call(UserSeeder::class);
    }
}
