<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            'Super Admin',
            'Admin',
            'Client',
            'Finance Desk Officer',
            'Secretary',
            'Marine Desk Officer',
            'Engineering Desk Officer',
            'Survey Desk Officer',
            'Area Manager',
            'HOD Finance',
            'HOD Marine',
            'HOD Engineering',
            'HOD Survey',
        ]
        ;
        if (Role::count() == 0) {

            foreach ($roles as $value) {
                $role = Role::create(['name' => $value]);
            }
        }
    }
}
