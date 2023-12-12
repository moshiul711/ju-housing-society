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
            $table->integer('membership');
            $table->integer('share_certificate');
            $table->integer('land_value');
            $table->integer('development');
            $table->integer('electric_line');
            $table->integer('savings_deposit');
            $table->integer('administration');
            $table->integer('plot_transfer');
            $table->integer('garbage');
            $table->integer('employee_welfare');
            $table->integer('late_fees');
            $table->integer('service');
            $table->integer('others');
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
