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
        Schema::create('inabilities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id')->unique();
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
            $table->unsignedBigInteger('inability_type_id')->unique();
            $table->foreign('inability_type_id')->references('id')->on('inability_types')->onDelete('cascade');
            $table->dateTime('date_start', $precision = 0);
            $table->dateTime('date_finish', $precision = 0);
            $table->integer('total_inability_days'); //preguntar si se usa como numero calculado en la vista
            $table->string('clasification');
            $table->integer('inability_amount');
            $table->integer('inability_company_amount');
            $table->integer('inability_entity_amount');
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
        Schema::dropIfExists('inabilities');
    }
};
