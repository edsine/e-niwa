<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateApplicationRequest;
use App\Http\Requests\UpdateApplicationRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\ApplicationRepository;
use Illuminate\Http\Request;
use Flash;

class ApplicationController extends AppBaseController
{
    /** @var ApplicationRepository $applicationRepository*/
    private $applicationRepository;

    public function __construct(ApplicationRepository $applicationRepo)
    {
        $this->applicationRepository = $applicationRepo;
    }

    /**
     * Display a listing of the Application.
     */
    public function index(Request $request)
    {
        $applications = $this->applicationRepository->paginate(10);

        return view('applications.index')
            ->with('applications', $applications);
    }

    /**
     * Show the form for creating a new Application.
     */
    public function create()
    {
        return view('applications.create');
    }

    /**
     * Store a newly created Application in storage.
     */
    public function store(CreateApplicationRequest $request)
    {
        $input = $request->all();

        $application = $this->applicationRepository->create($input);

        Flash::success('Application saved successfully.');

        return redirect(route('applications.index'));
    }

    /**
     * Display the specified Application.
     */
    public function show($id)
    {
        $application = $this->applicationRepository->find($id);

        if (empty($application)) {
            Flash::error('Application not found');

            return redirect(route('applications.index'));
        }

        return view('applications.show')->with('application', $application);
    }

    /**
     * Show the form for editing the specified Application.
     */
    public function edit($id)
    {
        $application = $this->applicationRepository->find($id);

        if (empty($application)) {
            Flash::error('Application not found');

            return redirect(route('applications.index'));
        }

        return view('applications.edit')->with('application', $application);
    }

    /**
     * Update the specified Application in storage.
     */
    public function update($id, UpdateApplicationRequest $request)
    {
        $application = $this->applicationRepository->find($id);

        if (empty($application)) {
            Flash::error('Application not found');

            return redirect(route('applications.index'));
        }

        $application = $this->applicationRepository->update($request->all(), $id);

        Flash::success('Application updated successfully.');

        return redirect(route('applications.index'));
    }

    /**
     * Remove the specified Application from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $application = $this->applicationRepository->find($id);

        if (empty($application)) {
            Flash::error('Application not found');

            return redirect(route('applications.index'));
        }

        $this->applicationRepository->delete($id);

        Flash::success('Application deleted successfully.');

        return redirect(route('applications.index'));
    }
}
