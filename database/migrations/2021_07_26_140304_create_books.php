<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('book_id');
            $table->string('name_book', 100);
            $table->integer('type_id');
            $table->string('author', 100);
            $table->string('translator', 100)->nullable();
            $table->string('publisher',100)->nullable();
            $table->dateTime('publication_date')->nullable();
            $table->string('publication_country', 100)->nullable();
            $table->string('language', 100)->nullable();
            $table->decimal('price', $precision = 18, $scale = 4);
            $table->string('isbn', 20);
            $table->string('review', 1000);
            $table->string('book_image', 100)->nullable();
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
