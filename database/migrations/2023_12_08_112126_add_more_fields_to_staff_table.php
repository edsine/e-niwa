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
        Schema::table('staff', function (Blueprint $table) {
            $table->string('applicant_class');
            $table->string('application_type');
            $table->string('office_close_by');
            $table->string('city');
            $table->string('country');
            $table->string('alternate_phone_number')->nullable();
            $table->string('street');
            $table->string('state');
            $table->string('lga');
            $table->integer('is_first_time_dues_paid')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_profiles', function (Blueprint $table) {
            $table->dropColumn('applicant_class');
            $table->dropColumn('application_type');
            $table->dropColumn('office_close_by');
            $table->dropColumn('city');
            $table->dropColumn('country');
            $table->dropColumn('alternate_phone_number');
            $table->dropColumn('date_of_birth');
        });
    }
};
