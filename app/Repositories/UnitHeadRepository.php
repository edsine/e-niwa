<?php

namespace App\Repositories;

use App\Models\UnitHead;
use App\Repositories\BaseRepository;

class UnitHeadRepository extends BaseRepository
{
    protected $fieldSearchable = [
        
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return UnitHead::class;
    }
}
