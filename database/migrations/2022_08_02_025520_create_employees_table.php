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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name','70');
            $table->string('lastname','70');
            $table->unsignedBigInteger('identif_type_id')->unique();
            $table->foreign('identif_type_id')->references('id')->on('identif_types')->onDelete('cascade');
            $table->string('identif_number','20')->unique();
            $table->string('salary','20');
            $table->string('salary_per_day','20');
            $table->string('position','20');
            $table->string('work_area','20');
            $table->unsignedBigInteger('eps_id')->unique();
            $table->foreign('eps_id')->references('id')->on('eps')->onDelete('cascade');
            $table->unsignedBigInteger('arl_id')->unique();
            $table->foreign('arl_id')->references('id')->on('arls')->onDelete('cascade');
            $table->unsignedBigInteger('afp_id')->unique();
            $table->foreign('afp_id')->references('id')->on('afps')->onDelete('cascade');
            $table->string('status');
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
        Schema::dropIfExists('employees');
    }
};
