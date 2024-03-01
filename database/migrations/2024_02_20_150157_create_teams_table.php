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
        Schema::disableForeignKeyConstraints();

        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('team_name', 150);
            $table->string('thumbnail', 255)->nullable();
            $table->string('social1', 150)->nullable();
            $table->string('social2', 150)->nullable();
            $table->string('social3', 150)->nullable();
            $table->foreignId('departament_id')->nullable()->constrained()->unsigned();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
