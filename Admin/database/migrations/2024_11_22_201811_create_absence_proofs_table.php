<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsenceProofsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absence_proofs', function (Blueprint $table) {
            $table->id();
            $table->string('ic_number'); // Use string for the IC number
            $table->foreign('ic_number')->references('ic_number')->on('users')->onDelete('cascade'); // Foreign key for the student
            $table->string('proof_file'); // Path to the uploaded proof file
            $table->text('reason')->nullable(); // Optional reason for absence
            $table->boolean('is_approved')->nullable(); // Approval status by teacher/admin
            $table->string('reviewed_by')->nullable(); // Teacher/admin who reviewed (IC number)
            $table->foreign('reviewed_by')->references('ic_number')->on('users')->onDelete('set null'); // Reference teacher/admin by IC number
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
        Schema::dropIfExists('absence_proofs');
    }
}
