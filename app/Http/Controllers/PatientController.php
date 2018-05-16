<?php

namespace Oasis\Http\Controllers;

use Oasis\Http\Requests\StorePatient;
use Oasis\Http\Requests\UpdatePatient;
use Oasis\patient;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class PatientController extends Controller {


    public function index()
    {
        $patients = Patient::all();

        return view('backend.patient.index',compact('patients'));
    }

    public function create()
    {
        return view('backend.patient.create');
    }

    public function store(StorePatient $request)
    {
        DB::transaction(function () use ($request)
        {
            $data = $request->data();

            $patient = Patient::create($data);

            $this->uploadRequestImage($request, $patient);
        });

        return redirect()->route('patient.index')->withSuccess(trans('messages.create_success', ['entity' => 'Patient']));
    }

    public function datatable()
    {
        return Datatables::of(Patient::query())->make(true);
    }

    public function edit(Patient $patient)
    {
        return view('backend.patient.edit',compact('patient'));
    }

    public function update(Patient $patient, UpdatePatient $request)
    {
        DB::transaction(function () use ($request, $patient)
        {
            $data = $request->data();

            $patient->update($data);

            $this->uploadRequestImage($request, $patient);
        });

        return redirect()->route('patient.index')->withSuccess(trans('messages.update_success', [ 'entity' => 'Patient' ]));
    }

    public function destroy(Patient $patient)
    {
        $patient->delete();

        return redirect()->route('patient.index')->withSuccess(trans('message.delete_success', [ 'entity' => 'Patient' ]));
    }
}
