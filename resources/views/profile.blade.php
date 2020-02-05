@extends('layouts.master')

@section('content')

   <div class="container p-5">
   @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
   <table class="table">
  <thead>
  
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">User ID</th>
      <th scope="col">Department</th>
      <th scope="col">Info</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @php $i = 0; @endphp
  
  @foreach ($students as $student)
  @php $i++; @endphp 
    <tr>
      <th scope="row">{{$i}}</th>
      <td>{{$student->name}}</td>
      <td>{{$student->user_id}}</td>
      <td>{{$student->department}}</td>
      <td>{{$student->info}}</td>
      <td><a href="{{ route('edit', $student->id)}}">Edit</a> <span>
       <form action="{{ route('delete', $student->id) }}" method="post">
       @csrf
         <input type="submit" value="Delete">
       </form>
      </span></td>
    </tr>
    @endforeach
  </tbody>
</table>
   </div>
@endsection

