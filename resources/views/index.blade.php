@extends('layouts.master')

@section('content')
<div class="container">
    @if(Session::has('msg'))
      <div class="alert alert-danger">
        <span>{{Session::get('msg')}}</span>
      </div>
    @endif
    <form action="{{route('selecttest')}}" method="post">
        @csrf

           
  <div class="row">
    <div class="col-md-2">
    <div class="form-check">
          <input name="ielts_name" class="form-check-input position-static" type="checkbox">
          <label class="form-check-label">IELTS</label>
        </div>
        <div class="form-check">
          <input name="pte_name" class="form-check-input position-static" type="checkbox">
          <label class="form-check-label">PTE</label>
       </div> 
    </div>
    <div class="col-md-5">
    <div class="form-group">
    <label>Writing</label>
    <select class="form-control" name="ielts_writing">
      <option value=""></option>
      <option value="10">10</option>
    </select>
  </div>
    </div>
    <div class="col-md-5">
        <div class="form-group">
            <label>Speaking</label>
            <select class="form-control" name="ielts_speaking">
              <option value=""></option>
              <option value="10">10</option>
            </select>
          </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-5">
    <div class="form-group">
    <label>Writing</label>
    <select class="form-control" name="pte_writing">
    <option value=""></option>
      <option value="10">10</option>
    </select>
  </div>
    </div>
    <div class="col-md-5">
        <div class="form-group">
            <label>Speaking</label>
            <select class="form-control" name="pte_speaking">
            <option value=""></option>
      <option value="10">10</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</div>
@endsection