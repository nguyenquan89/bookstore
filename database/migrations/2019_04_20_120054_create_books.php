<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable("books")) {
            Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("description");
            $table->string("name");
            $table->integer("quantity");
            $table->string("image");
            $table->integer("price");
            $table->timestamps();
            });
        }
        
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
