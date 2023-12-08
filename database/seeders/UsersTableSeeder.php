<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (User::count() == 0) {
            $user = new User();
            $user->name = 'Admin';
            $user->email = 'admin@niwa.com';
            $user->password = bcrypt('123456');
            $user->save();
        }

        $super_admin_role = Role::where('name', '=', 'Super Admin')->first();
        $user->assignRole($super_admin_role);
    }
}
