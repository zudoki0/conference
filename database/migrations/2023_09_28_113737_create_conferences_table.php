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
        Schema::create('conferences', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->string('speaker');
            $table->text('description');
            $table->string('address');
            $table->string('location');
            $table->integer('max_participants');
            $table->string('status');
            $table->datetime('conference_start_date');
            $table->datetime('conference_end_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('confrences');
    }
};
