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
        Schema::create('service_details', function (Blueprint $table) {
            $table->id();
            $table->string('service_year');
            $table->integer('membership')->default(0);
            $table->integer('share_certificate')->default(0);
            $table->integer('land_value')->default(0);
            $table->integer('development')->default(0);
            $table->integer('electric_line')->default(0);
            $table->integer('savings_deposit')->default(0);
            $table->integer('administration')->default(0);
            $table->integer('plot_transfer')->default(0);
            $table->integer('garbage')->default(0);
            $table->integer('employee_welfare')->default(0);
            $table->integer('late_fees')->default(0);
            $table->integer('service')->default(0);
            $table->integer('others')->default(0);
            $table->integer('total_charge');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_details');
    }
};
