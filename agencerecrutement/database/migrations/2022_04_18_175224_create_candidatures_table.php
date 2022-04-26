<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidatures', function (Blueprint $table) {
            $table->id();
            $table->string('nomCandidat');
            $table->string('prenomCandidat');
            $table->integer('ageCandidat');
            $table->string('telephoneCandidat');
            $table->string('domaineCandidat');
            $table->string('posteCandidat');
            $table->string('descriptionCandidat');
            $table->string('cv');
            $table->datetime('deleted_at')->nullable();

            $table->unsignedBigInteger('candidat_id');
            $table->foreign('candidat_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('candidatures');
    }
}
