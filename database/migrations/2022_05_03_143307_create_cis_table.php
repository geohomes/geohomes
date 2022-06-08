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
        Schema::create('cis', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('phone');
            $table->string('email');
            $table->string('residential_address');
            $table->string('occupation');
            $table->string('DOB');
            $table->string('plot_number');
            $table->string('lifted');
            $table->string('layout');
            $table->string('amount');
            $table->string('agent_name');
            $table->string('agent_phone');
            $table->string('agent_address');
            $table->string('agent_occupation');
            $table->string('agent-office_address');
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
        Schema::dropIfExists('cis');
    }
};
