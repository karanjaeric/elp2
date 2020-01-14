@extends('techhub.layouts.main')
@section('content')

<div class="page-content-wrapper">
<form action="/material" method="POST">
  @csrf
  <input type="text" name="usertype" id="usertype" value="2" hidden>
  <div class="form-group row showcase_row_area">
    <div class="col-md-3 showcase_text_area">
      <label for="inputType1">Name</label>
    </div>
    <div class="col-md-9 showcase_content_area">
      <input type="text" class="form-control" id="name" name="name" placeholder="Name of resource">
    </div>
  </div>
  <div class="form-group row showcase_row_area">
    <div class="col-md-3 showcase_text_area">
      <label for="inputType1">Url</label>
    </div>
    <div class="col-md-9 showcase_content_area">
      <input type="text" class="form-control" id="url" name="url" placeholder="Link to the resource">
    </div>
  </div>
  <div class="form-group row showcase_row_area">
    <div class="col-md-3 showcase_text_area">
      <label for="inputType1">UserId</label>
    </div>
    <div class="col-md-9 showcase_content_area">
      <input type="text" class="form-control" id="userId" name="userId" placeholder="Your user Id">
    </div>
  </div>
  <div class="form-group row showcase_row_area">
    <div class="col-md-3 showcase_text_area">
      <label for="inputType1">Description</label>
    </div>
    <div class="col-md-9 showcase_content_area">
      <textarea type="text" class="form-control" id="writeup" name="writeup">
      </textarea>
    </div>
  </div>
    <div class="form-group row showcase_row_area">
      <div class="col-md-3 showcase_text_area">
      </div>
    <div class="col-md-9 showcase_content_area">
      <button class="btn btn-primary" type="submit">Add Material</button>
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
