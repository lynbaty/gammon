<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absences', function (Blueprint $table) {
            $table->id();
            $table->enum('absence_type', ['day off', 'morning off', 'afternoon off']);
            $table->enum('reason', ['sickleave', 'holidayleave', 'businessleave', 'annualleave']);
            $table->timestamp('date_from');
            $table->timestamp('date_to');
            $table->string('comment');
            $table->enum('status', ['pending', 'approved', 'rejected']);

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('absences');
    }
}
