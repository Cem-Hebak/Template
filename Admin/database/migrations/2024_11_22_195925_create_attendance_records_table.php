<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendanceRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendance_records', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('ic_number'); // Foreign key for the student
            $table->foreign('ic_number')->references('ic_number')->on('users')->onDelete('cascade');
            $table->date('attendance_date'); // Date of attendance
            $table->boolean('is_present'); // Whether the student is present or absent
            $table->timestamps(); // Created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_records');
    }
}