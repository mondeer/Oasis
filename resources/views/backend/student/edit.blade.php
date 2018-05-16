@extends('backend.layouts.app')

@section('title', 'Student')

@section('content')
    <section>
        <div class="section-body">
            {{ Form::model($student, ['route' =>['student.update', $student->id],'class'=>'form form-validate','role'=>'form', 'files'=>true, 'novalidate']) }}
            {{ method_field('PUT') }}
            @include('backend.student.partials.form', ['header' => 'Edit Student <span class="text-primary">('.str_limit($student->name, 47).')</span>'])
            {{ Form::close() }}
        </div>
    </section>
@stop
