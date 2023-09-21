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
        //agregar columna corporate_email

        Schema::table('personal_date', function (Blueprint $table) {
            $table->string('corporate_email')->unique()->after('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //eliminar columna email y phone_number

        Schema::table('personal_date', function (Blueprint $table) {
            $table->dropColumn('email');
            $table->dropColumn('phone_number');
        });
    }
};
