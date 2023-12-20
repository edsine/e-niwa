<?php

namespace App\Http\Controllers;

use Flash;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AppBaseController;
use App\Repositories\UserProfileRepository;
use App\Http\Requests\CreateUserProfileRequest;
use App\Http\Requests\UpdateUserProfileRequest;
use App\Http\Requests\ClientRegistrationRequest;

class UserProfileController extends AppBaseController
{
    /** @var UserProfileRepository $userProfileRepository*/
    private $userProfileRepository;

    public function __construct(UserProfileRepository $userProfileRepo)
    {
        $this->userProfileRepository = $userProfileRepo;
    }

    /**
     * Display a listing of the UserProfile.
     */
    public function index(Request $request)
    {
        $userProfiles = $this->userProfileRepository->paginate(10);

        return view('user_profiles.index')
            ->with('userProfiles', $userProfiles);
    }

    /**
     * Show the form for creating a new UserProfile.
     */
    public function create()
    {
        return view('user_profiles.create');
    }

    /**
     * Store a newly created UserProfile in storage.
     */
    public function store(CreateUserProfileRequest $request)
    {
        $input = $request->all();

        $userProfile = $this->userProfileRepository->create($input);

        Flash::success('User Profile saved successfully.');

        return redirect(route('user-profiles.index'));
    }

    /**
     * Display the specified UserProfile.
     */
    public function show($id)
    {
        $userProfile = $this->userProfileRepository->find($id);

        if (empty($userProfile)) {
            Flash::error('User Profile not found');

            return redirect(route('user-profiles.index'));
        }

        return view('user_profiles.show')->with('userProfile', $userProfile);
    }

    /**
     * Show the form for editing the specified UserProfile.
     */
    public function edit($id)
    {
        $userProfile = $this->userProfileRepository->find($id);

        if (empty($userProfile)) {
            Flash::error('User Profile not found');

            return redirect(route('user-profiles.index'));
        }

        return view('user_profiles.edit')->with('userProfile', $userProfile);
    }

    /**
     * Update the specified UserProfile in storage.
     */
    public function update($id, UpdateUserProfileRequest $request)
    {
        $userProfile = $this->userProfileRepository->find($id);

        if (empty($userProfile)) {
            Flash::error('User Profile not found');

            return redirect(route('user-profiles.index'));
        }

        $userProfile = $this->userProfileRepository->update($request->all(), $id);

        Flash::success('User Profile updated successfully.');

        return redirect(route('user-profiles.index'));
    }

    /**
     * Remove the specified UserProfile from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $userProfile = $this->userProfileRepository->find($id);

        if (empty($userProfile)) {
            Flash::error('User Profile not found');

            return redirect(route('user-profiles.index'));
        }

        $this->userProfileRepository->delete($id);

        Flash::success('User Profile deleted successfully.');

        return redirect(route('user-profiles.index'));
    }

    public function clientRegistration(ClientRegistrationRequest $request)
    {
        $input = $request->all();

        // User Table Details
        $input_user['name'] = $input['first_name'] . ' ' . $input['last_name'];
        $input_user['email'] = $input['email'];
        $input_user['password'] = bcrypt($input['password']);

        $user = User::create($input_user);

        Auth::login($user);

        $role = Role::where('name', 'Client')->first();

        $user->assignRole($role);

        unset($input['password'], $input['password_confirmation']);

        $input['user_id'] = $user->id;

        $userProfile = $this->userProfileRepository->create($input);

        Flash::success('User Profile successfully created.');

        return redirect(route('payment.first_dues_payment'));
    }
}
