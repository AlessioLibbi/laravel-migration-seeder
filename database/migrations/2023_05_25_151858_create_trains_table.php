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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda', 500);
            $table->string('Stazione di partenza', 300);
            $table->string('Stazione di arrivo', 300);
            $table->dateTime('Orario di partenza');
            $table->dateTime('Orario di arrivo');
            $table->smallInteger('Codice Treno');
            $table->tinyInteger('Numero Carrozze');
            $table->boolean('In orario')->default(true);
            $table->boolean('Fuori orario')->default(false);
            $table->boolean('Cancellato')->default(false);
            $table->boolean('Confermato')->default(true);
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
        Schema::dropIfExists('trains');
    }
};
