<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_experiences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('start')->nullable();
            $table->string('end')->nullable();
            $table->string('certificate');
            $table->string('school');
            $table->integer('position');
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
        Schema::dropIfExists('education_experiences');
    }
}
