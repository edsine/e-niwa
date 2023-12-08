<?php

namespace App\Repositories;

use App\Models\Application;
use App\Repositories\BaseRepository;

class ApplicationRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'user_id',
        'area_office',
        'company_name',
        'business_nature',
        'application_status'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Application::class;
    }
}
