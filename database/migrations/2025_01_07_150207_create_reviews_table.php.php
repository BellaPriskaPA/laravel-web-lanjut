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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('umkm_id')->nullable();
            $table->unsignedBigInteger('culinaries_id')->nullable();
            $table->unsignedBigInteger('batik_id')->nullable();
            $table->text('review');
            $table->string('name', 25);
            $table->timestamps();

            $table->foreign('umkm_id')->references('id')->on('umkms')->onDelete('cascade');
            $table->foreign('culinaries_id')->references('id')->on('culinaries')->onDelete('cascade');
            $table->foreign('batik_id')->references('id')->on('batiks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
