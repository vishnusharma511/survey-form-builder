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
        Schema::create('survey_input_selects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('survey_input_id');
            $table->string('key');
            $table->string('value');
            $table->boolean('status')->default(true);
            $table->integer('sort')->default(0);
            $table->timestamps();
            $table->foreign('survey_input_id')->references('id')->on('survey_inputs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('survey_input_selects');
    }
};
