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
        Schema::create('depenses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->decimal('montant');
            $table->date('date');

            $table->unsignedBigInteger('payer_id');
            $table->unsignedBigInteger('colocation_id');
            $table->unsignedBigInteger('categorie_id');

            $table->foreign('payer_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('colocation_id')->references('id')->on('colocations')->onDelete('cascade');
            $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('depenses');
    }
};
