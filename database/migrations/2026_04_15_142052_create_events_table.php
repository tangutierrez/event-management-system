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
  public function up() {
    Schema::create('events', function (Blueprint $table) {
        $table->id(); // replaces event_id
        $table->string('event_name');
        $table->date('event_date');
        $table->string('location');
        $table->integer('capacity');
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
        Schema::dropIfExists('events');
    }
};