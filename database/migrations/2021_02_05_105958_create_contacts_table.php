<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('titre', 30);
            $table->string('sousTitre', 500);
            $table->string('logoAddress', 50);
            $table->string('titreAddress',30);
            $table->string('contentAddress',50);
            $table->string('logoEmail', 50);
            $table->string('titreEmail',30);
            $table->string('contentEmail1',30);
            $table->string('contentEmail2',30);
            $table->string('logoCall', 50);
            $table->string('titreCall',30);
            $table->string('contentCall1', 50);
            $table->string('contentCall2', 50);
            $table->string('boutton', 50);
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
        Schema::dropIfExists('contacts');
    }
}
