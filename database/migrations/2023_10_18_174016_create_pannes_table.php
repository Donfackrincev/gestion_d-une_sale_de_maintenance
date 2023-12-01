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
        Schema::create('pannes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('machine_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->String('notification');
            $table->String('appareil'); 
            $table->String('marque');
            $table->String('disaue dur');
            $table->String('Ram'); 
            $table->String('lecteur');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pannes');
    }
};
