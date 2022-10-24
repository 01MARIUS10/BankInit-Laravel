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
        Schema::table('prets', function (Blueprint $table) {
            $table->foreign('Responsable_id')->references('id')->on('responsables')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('Client_id')->references('id')->on('clients')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('RepayementFrequency_id')->references('id')->on('repayement_frequencies')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('BenefitPayementMethod_fk')->references('id')->on('mode_payements')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('CapitalPayementMethod_fk')->references('id')->on('mode_payements')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('prets', function (Blueprint $table) {
            $table->dropForeign('prets_Responsable_id_foreign');
            $table->dropForeign('prets_Client_id_foreign');
            $table->dropForeign('prets_RepayementFrequency_id_foreign');
            $table->dropForeign('prets_BenefitPayementMethod_fk_foreign');
            $table->dropForeign('prets_CapitalPayementMethod_fk_foreign');

        });
    }
};
