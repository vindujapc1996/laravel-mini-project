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
        Schema::create('patients', function (Blueprint $table) {
            $table->bigincrements('patient_id');
            $table->string('patient_name');
            $table->string('gender');
            $table->integer('age');
            $table->string('place');
            $table->string('email');
            $table->biginteger('contact');
            $table->string('department');
            $table->string('doctor_id');
            $table->string('image');
            $table->string('staff_id');

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
        Schema::dropIfExists('patients');
    }
};
