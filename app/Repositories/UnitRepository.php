<?php

namespace App\Repositories;

use App\Models\Unit;
use App\Repositories\BaseRepository;

class UnitRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name',
        'department_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Unit::class;
    }
}
