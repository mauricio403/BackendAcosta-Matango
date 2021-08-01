<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Database\Seeder;

class AppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createBooksAuthors();
    }
    public function createBooksAuthors(){
        $books = Book::factory(20)->create();
        foreach($books as $book){
            Author::factory()
            ->count(3)
            ->for($book)
            ->create();
        }
    }
}
