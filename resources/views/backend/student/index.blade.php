@extends('backend.layouts.app')

@section('title', 'Student')

@section('content')
    <section>
        <div class="section-body">
            <div class="card">
                <div class="card-head">
                    <header class="text-capitalize">all students</header>
                    <div class="tools">
                        <a class="btn btn-primary ink-reaction" href="{{ route('student.create') }}">
                            <i class="md md-add"></i>
                            Enroll
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover" id="student-datatable">
                            <thead>
                            <tr>
                                <th>{{ strtoupper(__('First Name')) }}</th>
                                <th>{{ strtoupper(__('Middle Name')) }}</th>
                                <th>{{ strtoupper(__('Last name')) }}</th>
                                <th>{{ strtoupper(__('National ID')) }}</th>
                                <th>{{ strtoupper(__('Gender')) }}</th>
                                <th>{{ strtoupper(__('dob')) }}</th>
                                <th>{{ strtoupper(__('Reg No')) }}</th>
                                <th>{{ strtoupper(__('course')) }}</th>
                                <th>{{ strtoupper(__('department')) }}</th>
                                <th>{{ strtoupper(__('email')) }}</th>
                                <th>{{ strtoupper(__('mobile')) }}</th>
                                <th>{{ strtoupper(__('Address')) }}</th>
                                <th>{{ strtoupper(__('next of kin')) }}</th>
                                <th>{{ strtoupper(__('next of kin contact')) }}</th>
                                <th>{{ strtoupper(__('guardian')) }}</th>
                                <th>{{ strtoupper(__('action')) }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@push('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/datatables/datatables.min.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('vendor/datatables/datatables.min.js') }}"></script>
<script>
    $(document).ready(function () {
        var table = $('#student-datatable').DataTable({
            "dom": "rBftip",
            "language": {
                "processing": "<h2 id='dt_loading'><span class='fa fa - spinner fa-pulse'></span> Loading...</h2>"
            },
            "buttons": [
                'pageLength', 'colvis'
            ],
            "order": [],
            "processing": true,
            "serverSide": true,
            "ajax": {
                "type": "POST",
                "data": {"_token": '{{ csrf_token() }}'},
                "url": '{{ route('student.datatable') }}'
            },
            "pageLength": "25",
            "columns": [
                {"data": "first_name", "name": "first_name", "searchable": "true"},
                {"data": "middle_name", "name": "middle_name"},
                {"data": "last_name", "name": "last_name"},
                {"data": "national_id", "name": "national_id"},
                {"data": "gender", "name": "gender"},
                {"data": "dob", "name": "dob"},
                {"data": "reg_no", "name": "reg_no"},
                {"data": "course", "name": "course"},
                {"data": "department", "name": "department"},
                {"data": "email", "name": "email"},
                {"data": "mobile", "name": "mobile"},
                {"data": "postal_address", "name": "postal_address"},
                {"data": "next_of_kin", "name": "next_of_kin"},
                {"data": "next_of_kin_contact", "name": "next_of_kin_contact"},
                {"data": "guardian", "name": "guardian"},
                {
                    "data": "id", "class": "text-right", "orderable": false, "render": function (data) {
                    return "<a href='/student/" + data + "/edit' class='btn btn-default'> Edit </a>" +
                        "<button data-url='/student/" + data + "/destroy' class='btn btn-danger item-delete'> Delete </button>";
                }
                }
            ]
        });

        $(document).on('click', '.uk-button-delete', function () {
            var that = this;
            var name = $(that).data('first_name');
            UIkit.modal.confirm("Delete this '" + name + "' ?").then(function () {
                $(that).closest('form').submit();
            });
        });
        $('input[type=search]').addClass('uk-input form-group');
    });
</script>
@endpush
