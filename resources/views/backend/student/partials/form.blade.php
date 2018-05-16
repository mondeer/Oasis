<div class="row">
    <div class="col-md-12">
        @include('partials.errors')
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-head">
                <header>{!! $header !!}</header>
                <div class="tools visible-xs">
                    <a class="btn btn-default btn-ink" onclick="history.go(-1);return false;">
                        <i class="md md-arrow-back"></i>
                        Back
                    </a>
                    <input type="submit" name="draft" class="btn btn-info ink-reaction" value="Save Draft">
                    <input type="submit" name="publish" class="btn btn-primary ink-reaction" value="Publish">
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4 col-md-4">
                        <div class="form-group">
                            {{ Form::text('first_name',old('first_name'),['class'=>'form-control', 'required']) }}
                            {{ Form::label('First Name','First Name*') }}
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                      <div class="form-group">
                        {{ Form::text('middle_name',old('middle_name'),['class'=>'form-control', 'required']) }}
                        {{ Form::label('middle_name','Middle Name*') }}
                      </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                      <div class="form-group">
                        {{ Form::text('last_name',old('middle_name'),['class'=>'form-control', 'required']) }}
                        {{ Form::label('last_name','Last Name*') }}
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            {{ Form::text('national_id',old('national_id'),['class'=>'form-control', 'required']) }}
                            {{ Form::label('national_id','National ID*') }}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                          {{ Form::select('gender', array('Male'=>'Male', 'Female'=>'Female', 'Others'=>'Others'), old('gender'), ['class' => 'form-control gender', 'required']) }}
                          {{ Form::label('gender','Gender*') }}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            {{ Form::text('dob',old('dob'),['class'=>'form-control', 'required']) }}
                            {{ Form::label('dob','Date of Birth*') }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            {{ Form::text('reg_no',old('reg_no'),['class'=>'form-control', 'required']) }}
                            {{ Form::label('reg_no','Reg No.*') }}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            {{ Form::text('course',old('course'),['class'=>'form-control', 'required']) }}
                            {{ Form::label('course','Course*') }}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            {{ Form::text('department',old('department'),['class'=>'form-control', 'required']) }}
                            {{ Form::label('department','Department*') }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            {{ Form::text('email',old('email'),['class'=>'form-control', 'required']) }}
                            {{ Form::label('email','Email*') }}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            {{ Form::text('mobile',old('mobile'),['class'=>'form-control', 'required']) }}
                            {{ Form::label('mobile','Mobile No*') }}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            {{ Form::text('postal_address',old('postal_address'),['class'=>'form-control', 'required']) }}
                            {{ Form::label('address','Address*') }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                          {{ Form::text('next_of_kin',old('next_of_kin'),['class'=>'form-control', 'required']) }}
                          {{ Form::label('next_of_kin','Next of Kin*') }}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                          {{ Form::text('next_of_kin_contact',old('next_of_kin_contact'),['class'=>'form-control', 'required']) }}
                          {{ Form::label('next_of_kin_contact','Next of Kin Contact*') }}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                          {{ Form::text('guardian',old('guardian'),['class'=>'form-control', 'required']) }}
                          {{ Form::label('guardian','Guardian*') }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label class="text-default-light">Featured Image (Optional)</label>
                        @if(isset($student) && $student->image)
                            <input type="file" name="image" class="dropify" data-default-file="{{ asset($student->image->thumbnail(260,198)) }}"/>
                        @else
                            <input type="file" name="image" class="dropify"/>
                        @endif
                    </div>
                </div>
                <div class="card-actionbar">
                    <div class="card-actionbar-row">
                        <button type="reset" class="btn btn-default ink-reaction">Reset</button>
                        <input type="submit" name="draft" class="btn btn-info ink-reaction" value="Submit">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-affix affix-4">
            <div class="card-head">
                <div class="tools">
                    <a class="btn btn-default btn-ink" href="{{ route('student.index') }}">
                        <i class="md md-arrow-back"></i>
                        Back
                    </a>
                </div>
            </div>
            {{ Form::hidden('view', old('view')) }}
        </div>
    </div>
</div>

@push('styles')
<link href="{{ asset('backend/css/libs/dropify/dropify.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('/backend/css/bootstrap-select.min.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('backend/js/libs/jquery-validation/dist/jquery.validate.min.js') }}"></script>
<script src="{{ asset('backend/js/libs/jquery-validation/dist/additional-methods.min.js') }}"></script>
<script src="{{ asset('backend/js/libs/dropify/dropify.min.js') }}"></script>
<script src="{{ asset('/backend/js/bootstrap-select.js') }}"></script>
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('my-editor', {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'
    });
</script>
@endpush
