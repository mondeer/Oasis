<?php

namespace Oasis\Http\Controllers;

use Illuminate\Http\Request;
use Oasis\Student;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class StudentCtrl extends Controller {

    public function index()
    {
        $students = Student::all();
        // dd($students);

        return view('backend.student.index',compact('students'));
    }

    public function create()
    {
        return view('backend.student.create');
    }

    public function store(Request $request)
    {
        DB::transaction(function () use ($request)
        {
            $data = $request->all();

            $student = Student::create($data);

            $this->uploadRequestImage($request, $student);
        });

        return redirect()->route('student.index')->withSuccess(trans('messages.create_success', ['entity' => 'Student']));
    }

    public function datatable()
    {
        return Datatables::eloquent(Student::query())->make(true);
    }

    public function edit(Student $student)
    {
        return view('backend.student.edit',compact('student'));
    }

    public function update(Student $student, UpdateStudent $request)
    {
        DB::transaction(function () use ($request, $student)
        {
            $data = $request->data();

            $student->update($data);

            $this->uploadRequestImage($request, $student);
        });

        return redirect()->route('student.index')->withSuccess(trans('messages.update_success', [ 'entity' => 'Student' ]));
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('student.index')->withSuccess(trans('message.delete_success', [ 'entity' => 'Student' ]));
    }
}
