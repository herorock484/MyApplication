<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoloniexDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poloniex_data', function (Blueprint $table) {
            $table->id();
            $table->string('coin_pair');
            $table->float('last');
            $table->float('highestBid')->nullable();
            $table->float('lowestAsk')->nullable();
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
        Schema::dropIfExists('poloniex_data');
    }
}
