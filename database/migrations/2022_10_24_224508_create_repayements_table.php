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
        Schema::create('repayements', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('Loan_id')->unsigned();
            $table->string('Loan');
            $table->dateTime('ShreduleRepayementDate');
            $table->dateTime('ExactRepayementDate');
            $table->boolean('Done')->default(false);
            $table->float('Amont');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('repayements');
    }
};
