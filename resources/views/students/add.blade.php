@extends('layouts.app')

@section('title' , 'Home')

@section('content')

<div class="container">
    <div class="row ">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="panel-body">
              <div class="register-logo">
                <b>DistLearn </b> REGISTER
              </div> 
              <div class="card">
                <div class="card-body register-card-body">
                  
                  <form  action="{{ route('customers.store') }}" method="POST" enctype="multipart/form-data" class="form-horizontal form-label-left">
                    @csrf
                    @include('admin.partials.studentform')
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-9 col-sm-9  offset-md-3">
                            <button type="reset" class="btn btn-primary">Reset</button>
                            <button type="submit" class="btn btn-success">Add Student</button>
                        </div>
                    </div>
                      <!-- /.col -->
                      <!-- /.col -->
                  </form>
                  <a href="login.php" class="text-center">Already Registered</a>
                </div><!-- /.form-box -->
              </div><!-- /.card -->
            </div>
          </div>
      </div>
  </div>

@endsection