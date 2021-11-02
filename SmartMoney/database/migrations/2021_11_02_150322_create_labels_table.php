<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLabelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labels', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
        });
        Schema::create('label_transactions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('label_id')->unsigned();
            $table->integer('transaction_id')->unsigned();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('labels');
        Schema::dropIfExists('label_transactions');
    }
}
