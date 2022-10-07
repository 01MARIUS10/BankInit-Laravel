<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pret', function (Blueprint $table) {
            $table->id();
            $table->string('ClientName');
            $table->integer('montant');
            $table->timestamp('begin_at')->useCurrent();
            $table->timestamp('end_at');
            $table->integer('interet');
            $table->Integer('pourcentage');
            $table->string('mode_payement');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pret');
    }
};
