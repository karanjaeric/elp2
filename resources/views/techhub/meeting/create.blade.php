@extends('techhub.layouts.main')
@section('content')

<div class="page-content-wrapper">
<form action="/meeting" method="POST">
  @csrf
  <input type="text" name="usertype" id="usertype" value="2" hidden>
  <div class="form-group row showcase_row_area">
    <div class="col-md-3 showcase_text_area">
      <label for="inputType1">Name</label>
    </div>
    <div class="col-md-9 showcase_content_area">
      <input type="text" class="form-control" id="name" name="name" placeholder="Title of Meeting">
    </div>
  </div>
  <div class="form-group row showcase_row_area">
    <div class="col-md-3 showcase_text_area">
      <label for="inputType1">Host</label>
    </div>
    <div class="col-md-9 showcase_content_area">
      <input type="text" class="form-control" id="host" name="host" placeholder="The meeting host">
    </div>
  </div>
  <div class="form-group row showcase_row_area">
    <div class="col-md-3 showcase_text_area">
      <label for="inputType1">Date</label>
    </div>
    <div class="col-md-9 showcase_content_area">
      <input type="text" class="form-control" id="date" name="date" placeholder="Date of the meeting">
    </div>
  </div>
  <div class="form-group row showcase_row_area">
    <div class="col-md-3 showcase_text_area">
      <label for="inputType1">Description</label>
    </div>
    <div class="col-md-9 showcase_content_area">
      <textarea type="text" class="form-control" id="description" name="description">
      </textarea>
    </div>
  </div>
    <div class="form-group row showcase_row_area">
      <div class="col-md-3 showcase_text_area">
      </div>
    <div class="col-md-9 showcase_content_area">
      <button class="btn btn-primary" type="submit">Create Meeting</button>
    </div>
  </div>
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
  </div>
</form>


</div>
@endsection
