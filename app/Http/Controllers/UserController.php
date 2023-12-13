<?php

namespace App\Http\Controllers;

use Flash;
use App\Models\User;
use App\Models\Location;
use Illuminate\Http\Request;
use OwenIt\Auditing\Models\Audit;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\ChangeUserPasswordRequest;

class UserController extends AppBaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the User.
     */
    public function index(Request $request)
    {
        $usersQuery = User::query()->orderBy('created_at', 'DESC');

        if ($request->filled('role_filter')) {
            $usersQuery->whereHas('roles', function ($q) use ($request) {
                $q->whereIn('id', $request->role_filter);
            });
        }

        if ($request->filled('search_filter')) {
            $usersQuery->where('name', 'like', '%' . $request->search_filter . '%');
        }

        /** @var User $users */
        $users = $usersQuery->paginate(10);

        return view('users.index')
            ->with(['users' => $users]);
    }


    /**
     * Show the form for creating a new User.
     */
    public function create()
    {
        $roles = Role::all();

        return view('users.create')->with(['roles' => $roles]);
    }

    /**
     * Store a newly created User in storage.
     */
    public function store(Request $request)
    {

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        /** @var User $user */
        $user = User::create($input);

        $role_ids = $input['roles'];

        // Assign roles to user
        foreach ($role_ids as $id) {
            $role = Role::findById($id);
            if (!empty($role)) {
                $user->assignRole($role);
            }
        }

        Flash::success('User saved successfully.');

        return redirect(route('users.index'));
    }

    /**
     * Display the specified User.
     */
    public function show($id)
    {
        /** @var User $user */
        $user = User::find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        return view('users.show')->with(['user' => $user]);
    }

    /**
     * Show the form for editing the specified User.
     */
    public function edit($id)
    {
        /** @var User $user */
        $user = User::find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        $roles = Role::all();


        return view('users.edit')->with(['user' => $user, 'roles' => $roles]);
    }

    /**
     * Update the specified User in storage.
     */
    public function update($id, Request $request)
    {
        /** @var User $user */
        $user = User::find($id);
        $input = $request->all();

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        $user->fill($input);
        $user->save();

        $role_ids = $input['roles'];

        // Detach previous roles
        $user->roles()->detach();

        // Assign roles to user
        foreach ($role_ids as $id) {
            $role = Role::findById($id);
            if (!empty($role)) {
                $user->assignRole($role);
            }
        }

        Flash::success('User updated successfully.');

        return redirect(route('users.index'));
    }

    /**
     * Remove the specified User from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var User $user */
        $user = User::find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        if ($user->hasRole('Super Admin') && $user->id == 1) {
            Flash::warning("You can't delete the system user");
            return redirect(route('users.index'));
        }

        $user->delete();

        Flash::success('User deleted successfully.');

        return redirect(route('users.index'));
    }
}
