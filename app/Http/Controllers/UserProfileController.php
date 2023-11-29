<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserProfileRequest;
use App\Http\Requests\UpdateUserProfileRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\UserProfileRepository;
use Illuminate\Http\Request;
use Flash;

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
}
