<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\image;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('nom_img');
            $table->timestamps();

        });

        schema::table('Biens', function (Blueprint $table){
            $table->foreignIdFor(image::class)->nullable()->constrained()->cascadeOnDelete();
        }
    );

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');

        schema::table('Biens', function (Blueprint $table){
            $table->dropForeignIdFor(image::class);
        }
    );
    }
};
