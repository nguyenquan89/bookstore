<?php
//noi quan ly du lieu mau
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Book::class, 20)->create();
    }
}
