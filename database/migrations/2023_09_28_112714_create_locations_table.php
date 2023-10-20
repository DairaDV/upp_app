<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('profile_id')->unsigned();

            /*$table->string('ip')->nullable();*/
            $table->string('street')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('coordinates')->nullable();
            /*$table->string('state')->nullable();
            $table->string('city')->nullable();*/
            /*$table->point('coordinates');*/

            $table->timestamps();

            $table->foreign('profile_id')->references('id')->on('profiles')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
