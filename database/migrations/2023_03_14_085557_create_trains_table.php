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
            // - Azienda - TIPO: Stringa
            $table->enum('company', ['TrenItalia', 'Italo']);
            // - Stazione di partenza - TIPO: STRINGA
            $table->string('departure_station', 128);
            // - Stazione di arrivo - TIPO: STRINGA
            $table->string('arrival_station', 128);
            // - Orario di partenza - TIPO: DATETIME / TIMESTAMP / TIME (da aggiungere la colonna di tipo DATE)
            $table->dateTime('departure_time');
            // - Orario di arrivo - TIPO: DATETIME / TIMESTAMP / TIME (da aggiungere la colonna di tipo DATE)
            $table->dateTime('arrival_time');
            // - Codice Treno - TIPO: STRINGA
            $table->string('code', 16);
            // - Numero Carrozze - TIPO: TINYINT UNSIGNED
            $table->unsignedTinyInteger('carriages');
            // - In orario - TIPO: TINYINT (BOOLEAN)
            $table->boolean('on_time')->default(true);
            // - Cancellato - TIPO: TINYINT
            $table->boolean('canceled')->default(false);
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
