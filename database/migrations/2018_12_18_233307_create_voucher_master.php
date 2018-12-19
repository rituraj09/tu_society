<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoucherMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vouchers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_financial', false, true);
            $table->string('voucher_no', 100);    
            $table->date('voucher_date');            
            $table->integer('voucher_type')->references('id')->on('voucher_types');
            $table->string('remarks', 1000)->nullable(); 
            $table->string('financial_year', 10)->nullable(); 
            $table->boolean('status')->default(1); 
            $table->integer('created_by', false, true); 
            $table->timestamps('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vouchers');
    }
}
