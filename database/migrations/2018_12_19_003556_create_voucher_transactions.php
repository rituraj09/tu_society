<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoucherTransactions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voucher_transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('voucher_id')->references('id')->on('vouchers');
            $table->integer('accounts_group_id')->references('id')->on('accounts_groups');  
            $table->integer('ledger_id')->references('id')->on('ledgers');  
            $table->unsignedDecimal('credit', 8, 2)->default(0);   
            $table->unsignedDecimal('debit', 8, 2)->default(0);    
            $table->boolean('status')->default(1);  
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
        Schema::dropIfExists('voucher_transactions');
    }
}
