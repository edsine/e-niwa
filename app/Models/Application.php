<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    public $table = 'applications';

    public $fillable = [
        'user_id',
        'area_office',
        'company_name',
        'business_nature',
        'application_status',


        'zone',
        'office_address',
        'mailing_address',
        'telephone_number',
        'project_name',
        'project_location',
        'aspects_of_project_work',
        'dredging_area_plan_image_url',
        'total_area_to_be_dredged',
        'purpose_of_dredgin',
        'quantity_to_be_dredged',
        'name_and_type_of_dredger',
        'particulars_of_dredger',
        'output_of_dredger',
        'size_of_floating_pipes',
        'dredger_owned_hired',
        'name_and_address_of_owners',
        'purpose_other_than_dredging',
        'commencement_date',
        'project_duration',

        'names_of_company_representative',
        'company_representative_designations',

        'date_of_site_inspection',
        'inspection_officer',
        'parties_to_inspection',

        'verification_of_applicant',
        'observations',
        'comments',
        'recommendation',
        'justification',
        'is_recommended',
    ];

    protected $casts = [
        'area_office' => 'string',
        'company_name' => 'string',
        'business_nature' => 'string'
    ];

    public static array $rules = [
        'user_id' => 'required',
        'area_office' => 'required|string|max:100',
        'company_name' => 'required|string|max:100',
        'business_nature' => 'nullable|string|max:100',
        'application_status' => 'required'
    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
}
