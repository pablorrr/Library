<?php

use Illuminate\Database\Seeder;

class BorrowedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Borrowed::class, 10)->create();
    }
}
