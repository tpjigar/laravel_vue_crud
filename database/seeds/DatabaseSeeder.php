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
        $this->call(CustomerSeeder::class);
        $this->call(PictureSeeder::class);
        $this->call(PhoneSeeder::class);
        $this->call(EmailSeeder::class);
    }
}