<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimesheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timesheets', function (Blueprint $table) {
            $table->id();
            $table->timestamp('date-from');
            $table->timestamp('date-to');
            $table->string('description');
            $table->string('work_with');
            $table->enum('status', ['pending', 'approved', 'rejected']);
            $table->string('reason');

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('location_id');
            $table->unsignedBigInteger('project_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('location_id')->references('id')->on('locations');
            $table->foreign('project_id')->references('id')->on('projects');
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
        Schema::dropIfExists('timesheets');
    }
}
