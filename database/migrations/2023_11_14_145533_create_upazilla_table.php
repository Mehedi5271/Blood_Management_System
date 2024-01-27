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
        Schema::create('upazilla', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('division_id')->nullable()->references('id')->on('divisons')->cascadeOnDelete();
            $table->foreignId('district_id')->nullable()->references('id')->on('districts')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('upazilla');
        // Schema::table('militer', function (Blueprint $table) {  
        //     $table->dropForeign(['id_jeciste']);
        //     $table->dropForeign(['id_annee']);
        //     });
        //     Schema::dropIfExists('militer');
        //     }

        Schema::table('upazilla', function (Blueprint $table) {
            $table->dropForeign(['division_id']);
            $table->dropForeign(['district_id']);
        });
        Schema::dropIfExists('upazilla');
    }
};
