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
        Schema::create('category', function (Blueprint $table) {
            $table->id();
            $table->string('Buty');
            $table->string('Piłki');
            $table->string('Lifestyle');
            $table->string('Odzież piłkarska');
            $table->string('Koszulki');
            $table->string('Spodenki');
            $table->string('Bluzy');
            $table->string('Skarpety');
            $table->string('Akcesoria');
            $table->string('Torby i plecaki');
            $table->string('Do treningu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category');
    }
};
