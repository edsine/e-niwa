<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AppBaseController;
use App\Repositories\DepartmentheadRepository;
use App\Http\Requests\CreateDepartmentheadRequest;
use App\Http\Requests\UpdateDepartmentheadRequest;

class DepartmentheadController extends AppBaseController
{
    /** @var DepartmentheadRepository $departmentheadRepository*/
    private $departmentheadRepository;

    public function __construct(DepartmentheadRepository $departmentheadRepo)
    {
        $this->departmentheadRepository = $departmentheadRepo;
    }

    /**
     * Display a listing of the Departmenthead.
     */
    public function index(Request $request)
    {
        $departmentheads = $this->departmentheadRepository->paginate(10);

        return view('departmentheads.index')
            ->with('departmentheads', $departmentheads);
    }

    /**
     * Show the form for creating a new Departmenthead.
     */
    public function create()
    {
        $department=Department::get()->pluck('name','id');
        $user= DB::table('users as u')
        ->join('units as ut','u.unit_id','=','ut.id')
        ->select('u.id','u.name')
        ->get()->pluck('name','id');
        return view('departmentheads.create',compact('user','department'));
    }

    /**
     * Store a newly created Departmenthead in storage.
     */
    public function store(CreateDepartmentheadRequest $request)
    {
        $input = $request->all();

        $departmenthead = $this->departmentheadRepository->create($input);

        Flash::success('Departmenthead saved successfully.');

        return redirect(route('departmentheads.index'));
    }

    /**
     * Display the specified Departmenthead.
     */
    public function show($id)
    {
        $departmenthead = $this->departmentheadRepository->find($id);

        if (empty($departmenthead)) {
            Flash::error('Departmenthead not found');

            return redirect(route('departmentheads.index'));
        }

        return view('departmentheads.show')->with('departmenthead', $departmenthead);
    }

    /**
     * Show the form for editing the specified Departmenthead.
     */
    public function edit($id)
    {
        $departmenthead = $this->departmentheadRepository->find($id);

        if (empty($departmenthead)) {
            Flash::error('Departmenthead not found');

            return redirect(route('departmentheads.index'));
        }

        return view('departmentheads.edit')->with('departmenthead', $departmenthead);
    }

    /**
     * Update the specified Departmenthead in storage.
     */
    public function update($id, UpdateDepartmentheadRequest $request)
    {
        $departmenthead = $this->departmentheadRepository->find($id);

        if (empty($departmenthead)) {
            Flash::error('Departmenthead not found');

            return redirect(route('departmentheads.index'));
        }

        $departmenthead = $this->departmentheadRepository->update($request->all(), $id);

        Flash::success('Departmenthead updated successfully.');

        return redirect(route('departmentheads.index'));
    }

    /**
     * Remove the specified Departmenthead from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $departmenthead = $this->departmentheadRepository->find($id);

        if (empty($departmenthead)) {
            Flash::error('Departmenthead not found');

            return redirect(route('departmentheads.index'));
        }

        $this->departmentheadRepository->delete($id);

        Flash::success('Departmenthead deleted successfully.');

        return redirect(route('departmentheads.index'));
    }
}
