<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_records', function (Blueprint $table) {
            $table->increments('id');
            $table->char('name');
            $table->integer('age');
            $table->string('national_id')->unique();
            $table->string('description');
            $table->string('address');
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
        Schema::dropIfExists('customer_records');
    }
}
