<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadSetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lead_sets', function (Blueprint $table) {
            $table->id();
            $table->string('MSISDN')->nullable();
            $table->string('USER_NAME')->nullable();
            $table->string('ACTIVITY_TYPE')->nullable();
            $table->string('INSURANCE_PARTNER')->nullable();
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
        Schema::dropIfExists('lead_sets');
    }
}
