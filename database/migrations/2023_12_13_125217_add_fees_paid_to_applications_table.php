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
        Schema::table('applications', function (Blueprint $table) {
            $table->tinyInteger('application_fee_paid')->default(0);
            $table->tinyInteger('dredging_fee_paid')->default(0);
            $table->tinyInteger('penalty_for_contravention_paid')->default(0);
            $table->tinyInteger('shore_utilisation_fee_paid')->default(0);
            $table->tinyInteger('drilling_fee_paid')->default(0);
            $table->tinyInteger('bridge_crossing_fee_paid')->default(0);
            $table->tinyInteger('pipeline_crossing_fee_paid')->default(0);
            $table->tinyInteger('utility_lines_crosssing_fee_paid')->default(0);
            $table->tinyInteger('seismic_surveys_fee_paid')->default(0);
            $table->tinyInteger('under_water_works_fee_paid')->default(0);
            $table->tinyInteger('erection_of_structures_fee_paid')->default(0);
            $table->tinyInteger('mooring_facilities_fee_paid')->default(0);
            $table->tinyInteger('diversion_of_water_fee_paid')->default(0);
            $table->tinyInteger('research_fee_paid')->default(0);
            $table->tinyInteger('other_fees_paid')->default(0);
            $table->decimal('other_fees_amount', 30, 2)->nullable();
            $table->text('others_fees_description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('applications', function (Blueprint $table) {
            $table->dropColumn('application_fee_paid');
            $table->dropColumn('dredging_fee_paid');
            $table->dropColumn('penalty_for_contravention_paid');
            $table->dropColumn('shore_utilisation_fee_paid');
            $table->dropColumn('drilling_fee_paid');
            $table->dropColumn('bridge_crossing_fee_paid');
            $table->dropColumn('pipeline_crossing_fee_paid');
            $table->dropColumn('utility_lines_crosssing_fee_paid');
            $table->dropColumn('seismic_surveys_fee_paid');
            $table->dropColumn('under_water_works_fee_paid');
            $table->dropColumn('erection_of_structures_fee_paid');
            $table->dropColumn('mooring_facilities_fee_paid');
            $table->dropColumn('diversion_of_water_fee_paid');
            $table->dropColumn('research_fee_paid');
            $table->dropColumn('penalty_for_contravention_paid');
            $table->dropColumn('other_fees_paid');
            $table->dropColumn('other_fees_amount', 30, 2);
            $table->dropColumn('others_fees_description');
        });
    }
};
