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
        Schema::create('characteristic_rules', function (Blueprint $table): void {
            $table->id()->autoIncrement();
            $table->foreignId('characteristic_id')->constrained('characteristics');
            $table->foreignId('questionaire_id')->constrained('questionaires');
            $table->decimal('mb', 3, 2);
            $table->decimal('md', 3, 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characteristic_rules');
    }
};
