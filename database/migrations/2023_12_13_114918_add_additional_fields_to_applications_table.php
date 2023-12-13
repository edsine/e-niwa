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
            $table->integer('zone')->nullable();
            $table->text('office_address')->nullable();
            $table->text('mailing_address')->nullable();
            $table->string('telephone_number')->nullable();
            $table->string('project_name')->nullable();
            $table->string('project_location')->nullable();
            $table->json('aspects_of_project_work');
            $table->string('dredging_area_plan_image_url')->nullable();
            $table->decimal('total_area_to_be_dredged',20,2)->nullable();
            $table->text('purpose_of_dredgin')->nullable();
            $table->decimal('quantity_to_be_dredged',20,2)->nullable();
            $table->string('name_and_type_of_dredger')->nullable();
            $table->text('particulars_of_dredger')->nullable();
            $table->text('output_of_dredger')->nullable();
            $table->decimal('size_of_floating_pipes',20,2)->nullable();
            $table->tinyInteger('dredger_owned_hired')->default(0);
            $table->text('name_and_address_of_owners')->nullable();
            $table->text('purpose_other_than_dredging')->nullable();
            $table->date('commencement_date')->default(now());
            $table->string('project_duration')->nullable();

            $table->text('names_of_company_representative')->nullable();
            $table->text('company_representative_designations')->nullable();

            // Office use only
            $table->date('date_of_site_inspection')->nullable();
            $table->string('inspection_officer')->nullable();
            $table->string('parties_to_inspection')->nullable();

            $table->text('verification_of_applicant')->nullable();
            $table->text('observations')->nullable();
            $table->text('comments')->nullable();
            $table->integer('recommendation')->default(0);
            $table->text('justification')->nullable();
            $table->tinyInteger('is_recommended')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('applications', function (Blueprint $table) {
            $table->dropColumn('zone');
            $table->dropColumn('office_address');
            $table->dropColumn('mailing_address');
            $table->dropColumn('telephone_number');
            $table->dropColumn('project_name');
            $table->dropColumn('project_location');
            $table->dropColumn('aspects_of_project_work');
            $table->dropColumn('dredging_area_plan_image_url');
            $table->dropColumn('total_area_to_be_dredged');
            $table->dropColumn('purpose_of_dredgin');
            $table->dropColumn('quantity_to_be_dredged');
            $table->dropColumn('name_and_type_of_dredger');
            $table->dropColumn('particulars_of_dredger');
            $table->dropColumn('output_of_dredger');
            $table->dropColumn('size_of_floating_pipes');
            $table->dropColumn('dredger_owned_hired');
            $table->dropColumn('name_and_address_of_owners');
            $table->dropColumn('purpose_other_than_dredging');
            $table->dropColumn('commencement_date');
            $table->dropColumn('project_duration');

            $table->dropColumn('names_of_company_representative');
            $table->dropColumn('company_representative_designations');

            $table->dropColumn('date_of_site_inspection');
            $table->dropColumn('inspection_officer');
            $table->dropColumn('parties_to_inspection');

            $table->dropColumn('verification_of_applicant');
            $table->dropColumn('observations');
            $table->dropColumn('comments');
            $table->dropColumn('recommendation');
            $table->dropColumn('justification');
            $table->dropColumn('is_recommended');
        });
    }
};
