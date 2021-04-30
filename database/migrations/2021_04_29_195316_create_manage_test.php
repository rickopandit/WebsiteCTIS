<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManageTest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manage_test', function (Blueprint $table) {
            $table->id();
            $table->string('patientName');
            $table->string('testDate');
            $table->string('testResult');
            $table->string('dateResult');
            $table->string('status');
            $table->string('centreName');
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
        Schema::dropIfExists('manage_test');
    }
}
