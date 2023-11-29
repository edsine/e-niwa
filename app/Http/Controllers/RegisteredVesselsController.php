<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRegisteredVesselsRequest;
use App\Http\Requests\UpdateRegisteredVesselsRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\RegisteredVesselsRepository;
use Illuminate\Http\Request;
use Flash;

class RegisteredVesselsController extends AppBaseController
{
    /** @var RegisteredVesselsRepository $registeredVesselsRepository*/
    private $registeredVesselsRepository;

    public function __construct(RegisteredVesselsRepository $registeredVesselsRepo)
    {
        $this->registeredVesselsRepository = $registeredVesselsRepo;
    }

    /**
     * Display a listing of the RegisteredVessels.
     */
    public function index(Request $request)
    {
        $registeredVessels = $this->registeredVesselsRepository->paginate(10);

        return view('registered_vessels.index')
            ->with('registeredVessels', $registeredVessels);
    }

    /**
     * Show the form for creating a new RegisteredVessels.
     */
    public function create()
    {
        return view('registered_vessels.create');
    }

    /**
     * Store a newly created RegisteredVessels in storage.
     */
    public function store(CreateRegisteredVesselsRequest $request)
    {
        $input = $request->all();

        $registeredVessels = $this->registeredVesselsRepository->create($input);

        Flash::success('Registered Vessels saved successfully.');

        return redirect(route('registered-vessels.index'));
    }

    /**
     * Display the specified RegisteredVessels.
     */
    public function show($id)
    {
        $registeredVessels = $this->registeredVesselsRepository->find($id);

        if (empty($registeredVessels)) {
            Flash::error('Registered Vessels not found');

            return redirect(route('registered-vessels.index'));
        }

        return view('registered_vessels.show')->with('registeredVessels', $registeredVessels);
    }

    /**
     * Show the form for editing the specified RegisteredVessels.
     */
    public function edit($id)
    {
        $registeredVessels = $this->registeredVesselsRepository->find($id);

        if (empty($registeredVessels)) {
            Flash::error('Registered Vessels not found');

            return redirect(route('registered-vessels.index'));
        }

        return view('registered_vessels.edit')->with('registeredVessels', $registeredVessels);
    }

    /**
     * Update the specified RegisteredVessels in storage.
     */
    public function update($id, UpdateRegisteredVesselsRequest $request)
    {
        $registeredVessels = $this->registeredVesselsRepository->find($id);

        if (empty($registeredVessels)) {
            Flash::error('Registered Vessels not found');

            return redirect(route('registered-vessels.index'));
        }

        $registeredVessels = $this->registeredVesselsRepository->update($request->all(), $id);

        Flash::success('Registered Vessels updated successfully.');

        return redirect(route('registered-vessels.index'));
    }

    /**
     * Remove the specified RegisteredVessels from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $registeredVessels = $this->registeredVesselsRepository->find($id);

        if (empty($registeredVessels)) {
            Flash::error('Registered Vessels not found');

            return redirect(route('registered-vessels.index'));
        }

        $this->registeredVesselsRepository->delete($id);

        Flash::success('Registered Vessels deleted successfully.');

        return redirect(route('registered-vessels.index'));
    }
}
