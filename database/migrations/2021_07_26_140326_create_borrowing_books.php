<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBorrowingBooks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrowing_books', function (Blueprint $table) {
            $table->increments('borrowing_book_id');
            $table->integer('book_id');
            $table->integer('borrower_id');
            $table->dateTime('form_date');
            $table->dateTime('to_date');

            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('borrowing_books');
    }
}
