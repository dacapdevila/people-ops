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
        if (Schema::hasTable('positions')) {
            return;
        }
        Schema::create('positions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('department_id')->constrained('positions')->onDelete('cascade');
            $table->decimal('salary_range_min', 10, 2);
            $table->decimal('salary_range_max', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (!Schema::hasTable('positions')) {
            return;
        }
        Schema::dropIfExists('positions');
    }
};
