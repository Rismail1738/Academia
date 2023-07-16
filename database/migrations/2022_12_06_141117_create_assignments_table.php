<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignments', function (Blueprint $table) {
            $table->id();
            $table->string('teacher')->nullable();
            $table->string('parent_id')->nullable();
            $table->string('price')->nullable();
            $table->string('status')->nullable();  
            $table->string('name')->nullable();
            $table->string('subject')->nullable();  
            $table->string('status')->nullable();          
            $table->string('date_due')->nullable();
            $table->string('pdf_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assignments');
    }
};
