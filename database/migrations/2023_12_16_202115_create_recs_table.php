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
        Schema::create('recs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('datecr');
            $table->string('name');
            $table->string('email');
            $table->string('message');
           //textarea+cid = Auth::user()->id
           //jointure 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recs');
    }
};
