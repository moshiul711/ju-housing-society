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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('plot_no')->nullable();
            $table->string('member_no')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->longText('about')->nullable();
            $table->string('address')->nullable();
            $table->string('password')->default(bcrypt('1234'));
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
