<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tages_books', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('tages_id')->unsigned();
            $table->unsignedBiginteger('books_id')->unsigned();

            $table->foreign('tages_id')->references('id')
                 ->on('tages')->onDelete('cascade');
            $table->foreign('books_id')->references('id')
                ->on('books')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tages_books');
    }
};
