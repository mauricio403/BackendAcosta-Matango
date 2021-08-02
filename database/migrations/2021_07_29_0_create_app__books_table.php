<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateAppBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection(env('DB_CONNECTION_APP'))->create('books', function (Blueprint $table) {
            $table->id();  //obligatorio con el mau xd

            $table->text('code')
               ->comment('campo de codigo');

            $table->date('date') 
               ->comment('campo de fecha');

            $table->text('description') 
               ->comment('campo de descripcion');

            $table->boolean('published')
                ->default(true)
                ->comment('campo de si esta publicado');

            $table->text('title') 
               ->comment('campo de titulo');

            $table->softDeletes(); //obligatorio con el mau xd
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
        Schema::connection(env('DB_CONNECTION_APP'))->dropIfExists('books');
    }
}
