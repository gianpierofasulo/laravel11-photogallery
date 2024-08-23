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
        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->softDeletes(); // crea automaticamente il campo deleted_at
            $table->string('name', 128);
            $table->text('description')->nullable();
            $table->foreignId('album_id');
            $table->foreign('album_id')->on('albums')->references('id')->onDelete('cascade')->onUpdate('cascade'); // definizione di una chiave sterna (campo, tabella esterna, chiave esterna)
            $table->string('image_path'); // default 255 char
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photos');
    }
};
