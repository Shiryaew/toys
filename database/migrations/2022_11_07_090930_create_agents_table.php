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
        if (!Schema::hasTable('agent')) {
            Schema::create('agent', function (Blueprint $table) {
                $table->id();
                $table->string('Title', 150); //имя агента
                $table->integer('AgentTypeID')->unsigned();
                $table->string('Address', 300);
                $table->string('INN', 12);
                $table->string('KPP', 9);
                $table->string('DirectorName', 100);
                $table->string('Phone', 20);
                $table->string('Email', 255);
                $table->string('Logo', 100);
                $table->integer('Priority')->unsigned();
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
        Schema::dropIfExists('agent');
    }
};
