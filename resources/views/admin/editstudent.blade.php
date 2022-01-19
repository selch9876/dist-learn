@extends('layouts.adminapp')

@section('title', 'Edit Student Info')


@section('content')
<div class="right_col" role="main">
    <div class="col-md-6 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>New Student <small>Add student information</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
            <br />
                <form action="{{ route('admin.updatestudent', ['student'=>$student->id]) }}" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">
                @csrf
                @method('PUT')
                @include('admin.partials.studentform')
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-9 col-sm-9  offset-md-3">
                            <button type="reset" class="btn btn-primary">Reset</button>
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
