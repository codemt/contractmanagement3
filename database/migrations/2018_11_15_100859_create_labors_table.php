<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaborsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name',191)->nullable();
            $table->string('middle_name',191)->nullable();
            $table->string('last_name',191)->nullable();
            $table->string('contact_no',191)->nullable();
            $table->string('alternate_contact_no',191)->nullable();
            $table->string('email',191)->nullable();
            $table->string('joining_date',191)->nullable();
            $table->string('address',191)->nullable();
            $table->string('designation',191)->nullable();
            $table->string('account_no',191)->nullable();
            $table->string('ifsc_code',191)->nullable();
            $table->string('pan_no',191)->nullable();


            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('labors');
    }
}
