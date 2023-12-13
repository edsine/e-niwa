<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\User;
use App\Models\Department;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Repositories\UnitHeadRepository;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateUnitHeadRequest;
use App\Http\Requests\UpdateUnitHeadRequest;

class UnitHeadController extends AppBaseController
{
    /** @var UnitHeadRepository $unitHeadRepository*/
    private $unitHeadRepository;

    public function __construct(UnitHeadRepository $unitHeadRepo)
    {
        $this->unitHeadRepository = $unitHeadRepo;
    }

    /**
     * Display a listing of the UnitHead.
     */
    public function index(Request $request)
    {
        $unitHeads = $this->unitHeadRepository->paginate(10);

        return view('unit_heads.index')
            ->with('unitHeads', $unitHeads);
    }

    /**
     * Show the form for creating a new UnitHead.
     */
    public function create()
    {
        $unit=Unit::all()->pluck('name','id');
       
        $user= DB::table('users as u')
        ->join('units as ut','u.unit_id','=','ut.id')
       
        ->select('u.id','u.name')
        ->get();
        // dd($user);
        return view('unit_heads.create',compact('unit','user'));
    }

    /**
     * Store a newly created UnitHead in storage.
     */
    public function store(CreateUnitHeadRequest $request)
    {
        $input = $request->all();

        $unitHead = $this->unitHeadRepository->create($input);

        Flash::success('Unit Head saved successfully.');

        return redirect(route('unit-heads.index'));
    }

    /**
     * Display the specified UnitHead.
     */
    public function show($id)
    {
        $unitHead = $this->unitHeadRepository->find($id);

        if (empty($unitHead)) {
            Flash::error('Unit Head not found');

            return redirect(route('unit-heads.index'));
        }

        return view('unit_heads.show')->with('unitHead', $unitHead);
    }

    /**
     * Show the form for editing the specified UnitHead.
     */
    public function edit($id)
    {
        $unitHead = $this->unitHeadRepository->find($id);

        if (empty($unitHead)) {
            Flash::error('Unit Head not found');

            return redirect(route('unit-heads.index'));
        }

        return view('unit_heads.edit')->with('unitHead', $unitHead);
    }

    /**
     * Update the specified UnitHead in storage.
     */
    public function update($id, UpdateUnitHeadRequest $request)
    {
        $unitHead = $this->unitHeadRepository->find($id);

        if (empty($unitHead)) {
            Flash::error('Unit Head not found');

            return redirect(route('unit-heads.index'));
        }

        $unitHead = $this->unitHeadRepository->update($request->all(), $id);

        Flash::success('Unit Head updated successfully.');

        return redirect(route('unit-heads.index'));
    }

    /**
     * Remove the specified UnitHead from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $unitHead = $this->unitHeadRepository->find($id);

        if (empty($unitHead)) {
            Flash::error('Unit Head not found');

            return redirect(route('unit-heads.index'));
        }

        $this->unitHeadRepository->delete($id);

        Flash::success('Unit Head deleted successfully.');

        return redirect(route('unit-heads.index'));
    }
}
