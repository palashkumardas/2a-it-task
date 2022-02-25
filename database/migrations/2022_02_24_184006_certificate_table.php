<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CertificateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificate',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
	        $table->string('mobile');
            $table->string('email');
            $table->string('enroll_course');
            $table->string('duration');
            $table->string('serial_cert');
            $table->string('status');
});

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
