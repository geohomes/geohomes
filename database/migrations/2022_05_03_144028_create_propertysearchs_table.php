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
        Schema::create('propertysearchs', function (Blueprint $table) {
            $table->id();
            $table->string('clientname');
            $table->string('phone');
            $table->string('email');
            $table->string('residential_address');
            $table->string('office_address');
            $table->string('plot_number');
            $table->string('layout');
            $table->string('person');
            $table->string('inspection_date');
            $table->string('survey_payment');
            $table->string('status');
            $table->string('approved_by');
            $table->string('registration_date');
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
        Schema::dropIfExists('propertysearchs');
    }
};
