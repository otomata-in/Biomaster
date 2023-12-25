<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('c_title');
            $table->string('c_type');
            $table->string('c_duration');
            $table->string('c_fee');
            $table->string('c_faculty');
            $table->string('c_faculty_qualification');
            $table->string('c_description');
            $table->string('c_certification_details');
            $table->string('c_skill_level');
            $table->string('c_language');
            $table->string('c_assessments');
            $table->string('c_certificate');
            $table->string('c_title_image')->nullable();
            $table->string('c_detailed_image')->nullable();
            $table->string('c_faculty_image')->nullable();
            $table->string('c_active_yn')->default('y');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
