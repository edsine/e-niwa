<?php

namespace App\Repositories;

use App\Models\RegisteredVessels;
use App\Repositories\BaseRepository;

class RegisteredVesselsRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'user_id',
        'vessel_name',
        'registration_date'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return RegisteredVessels::class;
    }
}
