<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('productsale')) {
            Schema::create('productsale', function (Blueprint $table) {
                $table->id();
                $table->integer('AgentID');
                $table->integer('ProductID');
                $table->date('SaleDate');
                $table->integer('ProductCount');
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
        Schema::dropIfExists('productsale');
    }
};
