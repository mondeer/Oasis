@extends('backend.layouts.app')

@section('title', 'Student')

@section('content')
    <section>
        <div class="section-body">
            {{ Form::open(['route' =>'student.store','class'=>'form form-validate','role'=>'form', 'files'=>true, 'novalidate']) }}
                @include('backend.student.partials.form', ['header' => 'Create a Student'])
            {{ Form::close() }}
        </div>
    </section>
@stop
