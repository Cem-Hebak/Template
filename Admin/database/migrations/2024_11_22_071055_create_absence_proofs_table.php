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
            $table->foreignId('student_id')->constrained('users')->onDelete('cascade'); // Foreign key for the student
            $table->string('proof_file'); // Path to the uploaded proof file
            $table->text('reason')->nullable(); // Optional reason for absence
            $table->boolean('is_approved')->nullable(); // Approval status by teacher/admin
            $table->foreignId('reviewed_by')->nullable()->constrained('users')->onDelete('set null'); // Teacher/admin who reviewed
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
