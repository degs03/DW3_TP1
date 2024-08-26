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
        Schema::create('autos',function(Blueprint $table){
            $table->id();
            $table->string('marca', 100)->nullable();
            $table->string('modelo')->nullable();
            $table->string('propietario')->unique();
            $table->integer('telefono')->nullable();
            $table->string('color')->nullable();
            $table->timestamps();
        });
    }

    /** 
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
