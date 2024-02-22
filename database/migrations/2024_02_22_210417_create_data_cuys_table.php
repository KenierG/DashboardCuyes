<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data_cuys', function (Blueprint $table) {
            $table->id();
            $table->string('age');
            $table->double('size_width');
            $table->double('size_heigth');
            $table->double('weigth');
            //$table->foreignId('cuys_id')->constrained()->cascadeOnDelete();
            //$table->foreignId('state_healts_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_cuys');
    }
};
