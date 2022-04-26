<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffectationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affectations', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('offre_id');
            $table->foreign('offre_id')->references('id')->on('offres')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('candidature_id');
            $table->foreign('candidature_id')->references('id')->on('candidatures')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('recruteur_id');
            $table->foreign('recruteur_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

            $table->datetime('deleted_at')->nullable();
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
        Schema::dropIfExists('affectations');
    }
}
