<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->timestamps();
            $table->text('icon')->nullable();
            $table->string('title');
            $table->string('type');
            $table->text('color')->nullable();
        });
        Schema::create('transaction_categories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('category_id')->unsigned();
            $table->integer('transaction_id')->unsigned();
        });
        Schema::create('budget_categories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('category_id')->unsigned();
            $table->integer('budget_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
        Schema::dropIfExists('budget_categories');
        Schema::dropIfExists('transaction_categories');
    }
}
