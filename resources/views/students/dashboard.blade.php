@extends('layouts.app')

@section('title' , 'Dashboard')

@section('content')
    <body>
        <div class="container">
            <div class="row">
                <div class="col-6 offset-3">
                    <h1 class="text-center m-5">{{ $user->name }} Dashboard</h1>
                    @if(\Session::has('error'))
                        <div class="alert alert-danger">{{ \Session::get('error') }}</div>
                    @endif
                    
                </div>
                <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action">
                        <thead>
                        <tr class="headings">
                            <th>
                            <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">Name </th>
                            <th class="column-title">Email </th>
                            <th class="column-title">Phone </th>
                            <th class="column-title">Age </th>
                            </th>
                            <th class="bulk-actions" colspan="7">
                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                        </tr>
                        </thead>
    
                        <tbody>
                            <tr class="even pointer">
                                <td class="a-center ">
                                <input type="checkbox" class="flat" name="table_records">
                                </td>
                                <td class=" ">{{ $user->name }}</td>
                                <td class=" ">{{ $user->email }} </td>
                                <td class=" ">{{ $user->phone }}</td>
                                <td class=" ">{{ $user->age }}</td>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>





            </div>
        </div>
@endsection
