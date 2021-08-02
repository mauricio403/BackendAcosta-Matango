<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * 
     */
    public function up()
    {
        Schema::connection(env('DB_CONNECTION_APP'))->create('authors', function (Blueprint $table) {
            $table->id();  //obligatorio con el mau xd

            $table->foreignId('book_id')
               ->constrained('app.books');

            $table->integer('age') 
                ->unsigned();
             
            $table->text('email');
            $table->text('identification');
            $table->text('names');
            $table->text('phone');
            $table->softDeletes();  //obligatorio con el mau xd
            $table->timestamps();  //obligatorio con el mau xd
        });  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection(env('DB_CONNECTION_APP'))->dropIfExists('authors');
    }
}
