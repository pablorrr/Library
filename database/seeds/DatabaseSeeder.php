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
        $this->call(BookSeeder::class);
        $this->call(BorrowedSeeder::class);
        $this->call(BorrowerSeeder::class);
        $this->call(TurnedSeeder::class);
    }
}
