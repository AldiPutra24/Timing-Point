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
        Schema::create('harians', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('mata_kuliah');
            $table->string('tugas');
            $table->date('tenggat');
            $table->string('media_pengumpulan');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('harians');
    }
};