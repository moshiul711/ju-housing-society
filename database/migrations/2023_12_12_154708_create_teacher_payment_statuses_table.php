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
        Schema::create('teacher_payment_statuses', function (Blueprint $table) {
            $table->id();
            $table->integer('service_detail_id');
            $table->integer('teacher_id');
            $table->integer('total_charge')->nullable();
            $table->integer('paid_amount')->nullable();
            $table->integer('due_amount')->nullable();
            $table->integer('late_amount')->default(0);
            $table->string('payment_status')->default('Due');
            $table->string('payment_medium')->default('Cash');
            $table->string('payment_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher_payment_statuses');
    }
};
