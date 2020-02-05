@extends('layouts.master')

@section('content')

<div class="contact">
  <div class="container">
  <div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">
  <h1 class="text-center">
   
  @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  
  </h1>
  <form action="{{ route('update', $student->id) }}" method="post">
  @csrf
  <div class="form-group">
    <input type="text" class="form-control" name="name" value="{{ $student->name }}" placeholder="Enter Name">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="user_id" value="{{ $student->user_id }}" placeholder="Enter User ID">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="department" value="{{ $student->department }}" placeholder="Enter Department">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="info" value="{{ $student->info }}" placeholder="Enter Details">
  </div>
  <button type="submit" class="btn btn-primary">Edit</button>
</form>
  </div>
  <div class="col-md-3"></div>
</div>
  </div>
</div>
@endsection

