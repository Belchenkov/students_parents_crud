<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_parent', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')
                ->unsigned()
                ->constrained('students')
                ->onDelete('cascade');
            $table->foreignId('parent_id')
                ->unsigned()
                ->constrained('parent_of_students')
                ->onDelete('cascade');
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
        Schema::table('student_parent', function($table)
        {
            $table->dropForeign('student_parent_parent_id_foreign');
            $table->dropForeign('student_parent_student_id_foreign');
        });

        Schema::dropIfExists('student_parent');
    }
}
