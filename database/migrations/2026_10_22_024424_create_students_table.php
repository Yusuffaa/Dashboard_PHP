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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name', length: 100);
            $table->string('nis', length: 20);
            // $table->string('classroom', length: 20);
            $table->foreignId('classroom_id')->constrained(
                table: 'classrooms', indexName: 'classrooms_student_id'
            );
            $table->string('address', length: 255);
           

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
