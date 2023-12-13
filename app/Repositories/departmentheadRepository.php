<?php

namespace App\Repositories;

use App\Models\Departmenthead;
use App\Repositories\BaseRepository;

class DepartmentheadRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'user_id',
        'department_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Departmenthead::class;
    }
}
