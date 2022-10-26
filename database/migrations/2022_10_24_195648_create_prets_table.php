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
        Schema::create('prets', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('Responsable_id')->unsigned();
            $table->bigInteger('Client_id')->unsigned();
            $table->bigInteger('Amount');
            $table->dateTime('LoanDate');
            $table->dateTime('RepayementEndDate');
            $table->integer('RepayementFrequency')->unsigned();
            $table->bigInteger('BenefitPayementMethod_fk')->unsigned();
            $table->bigInteger('CapitalPayementMethod_fk')->unsigned();
            $table->text('Remark');
            $table->boolean('ClosedContrat');
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
        Schema::dropIfExists('prets');
    }
};
