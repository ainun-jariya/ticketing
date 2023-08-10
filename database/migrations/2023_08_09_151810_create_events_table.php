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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('poster');
            $table->text('description');
            $table->datetime('start_at');
            $table->datetime('end_at');
            $table->integer('creator_id');
            $table->foreign('creator_id')->references('id')->on('users');
            $table->boolean('several_days')->default(false);
            $table->double('price')->nullable()->default(-1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
