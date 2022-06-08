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
        Schema::create('consultants', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('middlename');
            $table->string('surname');
            $table->string('phone');
            $table->string('email');
            $table->string('residential_address');
            $table->string('office_address');
            $table->string('kin_name');
            $table->string('kin_address');
            $table->string('kin-relation');
            $table->string('prepared_by');
            $table->string('account_name');
            $table->string('account_number');
            $table->string('bank');
            $table->string('company_phone');
            $table->string('company_email');
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
        Schema::dropIfExists('consultants');
    }
};
