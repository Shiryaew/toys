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
        if (!Schema::hasTable('product')) {
            Schema::create('product', function (Blueprint $table) {
                $table->id();
                $table->string('Title', 100); //имя продукта
                $table->integer('ProductTypeID')->unsigned();
                $table->string('ArticleNumber', 10);
                $table->longText('Description');
                $table->string('Image', 100);
                $table->integer('ProductionPersonCount');
                $table->integer('ProductionWorkshopNumber');
                $table->decimal('MinCostForAgent', 10, 2);
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
        Schema::dropIfExists('product');
    }
};
