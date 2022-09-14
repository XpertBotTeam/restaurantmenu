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
        Schema::create('booktbs', function (Blueprint $table) {
            $table->id();
            $table->string('day')->nullable();
            $table->float('hour')->nullable();
            $table->string('name')->nullable();
            $table->integer('phone')->nullable();
            $table->integer('persons')->nullable();
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
        Schema::dropIfExists('booktbs');
    }
};