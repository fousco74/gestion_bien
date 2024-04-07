<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('biens', function (Blueprint $table) {
            $table->id();
            $table->string('titre_b');
            $table->longText('desc');
            $table->integer('nb_piece');
            $table->integer('nb_chambre');
            $table->string('adresse');
            $table->string('ville');
            $table->integer('nb_etage');
            $table->integer('surface');
            $table->integer('prix');
            $table->integer('code_postal');
            $table -> boolean('sold');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biens');
    }
};
