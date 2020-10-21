<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateDogsTable
 */
class CreateDogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('dogs', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('temperament')->nullable();
            $table->string('alternative_names')->nullable();
            $table->string('life_span')->nullable();
            $table->string('origin')->nullable();
            $table->string('wikipedia_url')->nullable();
            $table->string('country_code')->nullable();
            $table->string('description')->nullable();
            $table->string('favourite')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('dogs');
    }
}
