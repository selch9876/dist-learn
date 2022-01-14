@extends('layouts.app')

@section('title' , $package->package_name)

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="feature-thumb">
                <h1> {{ $package->package_name }}</h1>
                <img src="{{ URL::asset('known/images/courses-image3.jpg') }}" class="img-fluid" alt="...">
                <div>
                    <p>{{ $package->package_body }}</p>
                    <p>Added {{ $package->created_at->diffForHumans() }}</p>
                </div>
            </div>
            @if (now()->diffInMinutes($package->created_at) < 5)
                <div class="alert alert-info">New!</div>
            @endif
        </div>
    </div>
</section>
@endsection