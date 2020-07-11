@extends('layouts.app')
@section('title', 'List')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

@section('content')
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body w3-mobile w3-responsive">
                            <table id="example2" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th class="text-center">ACTION</th>
                                <th class="text-center">STUDENT ID</th>
                                <th class="text-center">NAME</th>
                                <th class="text-center">COURSE</th>
                                <th>CONTACT</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $student)
                                    <tr>
                                        <td> </td>
                                        <td class="text-center">{{ $student->StudId }}</td>
                                        <td>{{ $student->studLast }},&nbsp;{{$student->studFirst}}&nbsp;<small>{{ $student->studMid }}</small></td>
                                        <td>{{ $student->course }}</td>
                                        <td>{{ $student->studContact }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>ACTION</th>
                                <th>STUDENT ID</th>
                                <th class="text-center">NAME</th>
                                <th class="text-center">COURSE</th>
                                <th>CONTACT</th>
                            </tr>
                            </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Add and Edit customer modal -->
{{-- <div class="modal fade" id="crud-modal" aria-hidden="true" >
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
    <h4 class="modal-title" id="userCrudModal"></h4>
    </div>
    <div class="modal-body">
    <form name="userForm" action="{{ route('users.store') }}" method="POST">
    <input type="hidden" name="user_id" id="user_id" >
    @csrf
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>Name:</strong>
    <input type="text" name="name" id="name" class="form-control" placeholder="Name" onchange="validate()" >
    </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>Email:</strong>
    <input type="text" name="email" id="email" class="form-control" placeholder="Email" onchange="validate()">
    </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
    <button type="submit" id="btn-save" name="btnsave" class="btn btn-primary" disabled>Save</button>
    <a href="{{ route('users.index') }}" class="btn btn-danger">Cancel</a>
    </div>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>

    <!-- Show user modal -->
    <div class="modal fade" id="crud-modal-show" aria-hidden="true" >
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
    <h4 class="modal-title" id="userCrudModal-show"></h4>
    </div>
    <div class="modal-body">
    <div class="row">
    <div class="col-xs-2 col-sm-2 col-md-2"></div>
    <div class="col-xs-10 col-sm-10 col-md-10 ">

    <table class="table-responsive ">
    <tr height="50px"><td><strong>Name:</strong></td><td id="sname"></td></tr>
    <tr height="50px"><td><strong>Email:</strong></td><td id="semail"></td></tr>

    <tr><td></td><td style="text-align: right "><a href="{{ route('studentAccount.list') }}" class="btn btn-danger">OK</a> </td></tr>
    </table>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
 --}}
@endsection

<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
            "responsive": true,
        });
    });
</script>
