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
        Schema::create('personal_date', function (Blueprint $table) {
            $table->id('id_personal_date')->autoIncrement();
            $table->string('country');
            $table->enum ('document_type', ['CC', 'TI','PS','CE','RC]'])->default('CC');
            $table->string ('document_number');
            $table->string('name');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string ('second_last_name');
            $table->enum('sex', ['M', 'F','U']);
            $table->enum('marital_status', ['S', 'C','V','D','U']);
            $table->date('date_of_birth');
            $table->string('city_of_birth');
            $table->string('department_of_birth');
            $table->string('country_of_birth');
            $table->string ('residence_address');
            $table->string('city_of_residence');
            $table->string('department_of_residence');  
            $table->string('country_of_residence');
            $table->char('stratum',1);
            $table->enum('residence type', ['URBANA', 'RURAL']);
            $table->float('height',8,2)->nullable()->invisible()->comment('Altura en metros');
            $table->string('email');
            $table->string('phone_number');
            $table->string('cell_phone_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_date');
    }
};
