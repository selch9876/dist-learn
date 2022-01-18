@extends('layouts.app')

@section('title' , 'Dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="text-center m-5">Student login</h1>
            @if(\Session::has('error'))
                <div class="alert alert-danger">{{ \Session::get('error') }}</div>
            @endif
            <form method="post" action="{{ route('student.login') }}">
                @csrf
                <div class="row mt-3">
                        <div class=" mb-3">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Input email address">
                            
                        </div>
                        <div class=" mb-3">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Input password">
                            
                        <button type="submit" class="btn">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
            
@endsection