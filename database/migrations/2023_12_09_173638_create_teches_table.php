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
        Schema::create('teches', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('datecr');
            $table->string('name');
            $table->string('prenom');
            $table->string('telephone');
            $table->string('image');
 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teches');
    }
};
