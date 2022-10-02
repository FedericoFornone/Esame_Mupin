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
        Schema::create('computers', function (Blueprint $table) {
            $table->id();
            $table->string('modello');
            $table->integer('anno');
            $table->string('cpu');
            $table->float('velocita', 6,2);
            $table->string('memoria');
            $table->string('hard_disk');
            $table->string('os');
            $table->string('note');
            $table->string('url');
            $table->string('tag'); 
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
        Schema::dropIfExists('computers');
    }
};
