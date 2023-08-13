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
        Schema::table('books', function (Blueprint $table) {
            $table->unsignedBigInteger('cat_id')->nullable();
            $table->foreign('cat_id')
            ->references('id')->on('catagorys')
            ->onDelete('cascade')
            ->onUpdate('cascade');
    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {
            //
             //1- delete Relation
             $table->dropForeign(['cat_id']);
             //2-delete Column
             $table->dropColumn('cat_id');
        });
    }
};
