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
        Schema::create('albums', function (Blueprint $table) {
            $table->id();
            $table->string('album_name', 128)->unique()->nullable(false); // permetti NULL
            $table->string('album_thumb', 128)->nullable(); // stessa cosa... permette il NULL
            $table->text('description')->nullable();
            $table->foreignId('user_id');
            $table->foreign('user_id')->on('users')->references('id')->onDelete('cascade')->onUpdate('cascade'); // definizione di una chiave sterna (campo, tabella esterna, chiave esterna)
            $table->timestamps();
            $table->softDeletes(); // crea automaticamente il campo deleted_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('albums');
    }
};
