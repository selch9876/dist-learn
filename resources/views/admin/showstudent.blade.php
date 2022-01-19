@extends('layouts.adminapp')

@section('title', $student->name)


@section('content')
<div class="right_col" role="main">
    <div class="col-md-6 ">
        <div class="x_panel">
            @if ($student->image)
                <div >
                    <span class="image"><img src="{{ $student->image->url() }}" alt="" width="150px"></span>
                    <h1 style="padding-top:100px; text-shadow:1px 2px #000">
            @else
                    <h1>
            @endif
            
                {{ $student->name }}
            
            @if ($student->image)
                    </h1>
                </div>
            @else
                </h1>
            @endif
            
            <p>{{ $student->email }}</p>
            
        </div>
    </div>
</div>
@endsection