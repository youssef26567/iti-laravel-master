<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::factory()->count(100)->create();
        // Book::table('books')->insert([
        //                  'title'=>'BMW',
        //                  'price'=>120,
                        
        //              ]);
    }
}
