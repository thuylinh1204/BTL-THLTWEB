<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->timestamps();
            $table->date("date");
            $table->text("note")->nullable();
            $table->decimal("amount");
            $table->string("currency")->default("VND");
            $table->string("recurrence");
            $table->string("photo")->nullable();
            $table->date("end_date")->nullable();
            $table->string("reminder");
            $table->integer('wallet_id');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
