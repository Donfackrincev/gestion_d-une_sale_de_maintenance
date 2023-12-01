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
        Schema::create('machines', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained()->onDelet('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('machines');
        $table->id();
        $table->date('date entre');
            $table->String('heure');
            $table->String('appareil'); 
            $table->String('marque');
            $table->String('disaue dur');
            $table->String('Ram'); 
            $table->String('lecteur');
            $table->String('chargeur'); 
            $table->String('baterie');
            $table->timestamps();
    }
};
