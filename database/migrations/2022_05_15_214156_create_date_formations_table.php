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
        Schema::create('date_formations', function (Blueprint $table) {
            $table->id();
            $table->string('startDate');
            $table->string('endDate');
            $table->integer('maxStudents')->nullable();
            $table->integer('alreadyEnrolled')->nullable();
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
        Schema::dropIfExists('date_formations');
    }
};
