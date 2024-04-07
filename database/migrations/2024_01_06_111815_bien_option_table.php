<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use app\Models\option;
use app\Models\Bien;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        schema::create('bien_option',function(Blueprint $table){
            $table->foreignIdFor(App\Models\Bien::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(App\Models\option::class)->constrained()->cascadeOnDelete();
            
            $table->primary(['option_id','bien_id']);
        }
    );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
