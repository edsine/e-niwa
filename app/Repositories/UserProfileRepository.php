<?php

namespace App\Repositories;

use App\Models\UserProfile;
use App\Repositories\BaseRepository;

class UserProfileRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'user_id',
        'first_name',
        'last_name',
        'other_name',
        'email',
        'phone_number',
        'street',
        'state',
        'lga'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return UserProfile::class;
    }
}
