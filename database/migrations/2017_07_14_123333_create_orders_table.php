<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
          $table->increments('id');
          $table->string('order_number',50)->unique();
          $table->string('patient_name',50);
          $table->string('patient_file_number');
          $table->integer('doctor_id');
          $table->integer('clinic_id');
          $table->text('color');
          $table->integer('work_type_id');
          $table->integer('user_id');
          $table->timestamp('delivery_date');
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
        
        Schema::drop('orders');
        
    }
}
