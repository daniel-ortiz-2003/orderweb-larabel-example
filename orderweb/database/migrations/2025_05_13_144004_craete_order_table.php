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
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->date(('legalization_date'))->comment('fecha legalizacion');
            $table->string('adrress', 50)->comment('direccion');
            $table->string('city', 88)->comment('ciudad');
            $table->foreignId('casual_id')->constrained('casual')->onDelete('cascade')->onUpdae('cascade');
            $table->foreignId('observation_id')->constrained('observation')->onDelete('cascade')->onUpdate('cascade');                                                                         
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
