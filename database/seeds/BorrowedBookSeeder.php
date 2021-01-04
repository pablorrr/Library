<?php

use Illuminate\Database\Seeder;

class BorrowedBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\BorrowedBooks::class, 10)->create();
    }
}
