@extends('layouts.adminapp')


@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Students Table <small>Some examples to get you started</small></h3>
        </div>
        <div class="x_content">

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
                        <th class="column-title">Image </th>
                        <th></th>
                        </th>
                        <th class="bulk-actions" colspan="7">
                        <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                        </th>
                    </tr>
                    </thead>

                    <tbody>
                        @forelse ($students as $student)
                        <tr class="even pointer">
                            <td class="a-center ">
                            <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" "><a href="{{ route('admin.editstudent', ['student'=>$student->id]) }}">{{ $student->name }}</a></td>
                            <td class=" ">{{ $student->email }} </td>
                            <td class=" ">{{ $student->phone }}</td>
                            <td class=" ">{{ $student->age }}</td>
                            @if ($student->image)
                            <td class=" "><span class="image"><img src="{{ $student->image->url() }}" alt="" width="50px"></span></td>
                            @else
                            <td class=" "><img src="" alt=""></td>
                            @endif
                            <td>
                                <form action="{{ route('admin.destroystudent', ['student' => $student->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Delete Student" onclick="return confirm('Are you sure?')">
                                </form>
                            </td>
                        </tr>
                        @empty
                            There are no students!
                        @endforelse
                    
                    
                    </tbody>
                </table>
            </div>
            
         </div>
        </div>
  </div>
</div>
</div>


  @endsection