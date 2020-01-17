@extends('techhub.layouts.landingpage')
@section('content')
<body>
  <div class="container col-lg-10">
    <div class="grid">
      <p class="grid-header">Just a few details from you to sign you up on the platform</p>
      <div class="grid-body">
        <div class="item-wrapper">
          <div class="row mb-3">
            <div class="col-md-8 mx-auto">
              <form action="/register" method="POST">
                @csrf
                <input type="text" name="usertype" id="usertype" value="2" hidden>
                <div class="form-group row showcase_row_area">
                  <div class="col-md-3 showcase_text_area">
                    <label for="inputType1">First Name</label>
                  </div>
                  <div class="col-md-9 showcase_content_area">
                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="John">
                  </div>
                </div>
                <div class="form-group row showcase_row_area">
                  <div class="col-md-3 showcase_text_area">
                    <label for="inputType1">Last Name</label>
                  </div>
                  <div class="col-md-9 showcase_content_area">
                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Doe">
                  </div>
                </div>
                <div class="form-group row showcase_row_area">
                  <div class="col-md-3 showcase_text_area">
                    <label for="inputType1">Email</label>
                  </div>
                  <div class="col-md-9 showcase_content_area">
                    <input type="text" class="form-control" id="email" name="email" placeholder="John.Doe@gmail.com">
                  </div>
                </div>
                <div class="form-group row showcase_row_area">
                  <div class="col-md-3 showcase_text_area">
                    <label for="inputType1">Phone Number</label>
                  </div>
                  <div class="col-md-9 showcase_content_area">
                    <input type="text" class="form-control" id="phonenumber" name="phonenumber" placeholder="07........">
                  </div>
                </div>
                <div class="form-group row showcase_row_area">
                  <div class="col-md-3 showcase_text_area">
                    <label for="inputType1">Alternative Number</label>
                  </div>
                  <div class="col-md-9 showcase_content_area">
                    <input type="text" class="form-control" id="phonenumber2" name="phonenumber2" placeholder="07........">
                  </div>
                </div>
                <div class="form-group row showcase_row_area">
                  <div class="col-md-3 showcase_text_area">
                    <label for="inputType1">Gender</label>
                  </div>
                  <div class="col-md-9 showcase_content_area">
                    <input type="text" class="form-control" id="gender" name="gender" placeholder="(fe)male">
                  </div>
                </div>
                <div class="form-group row showcase_row_area">
                  <div class="col-md-3 showcase_text_area">
                    <label for="inputType1">University</label>
                  </div>
                  <div class="col-md-9 showcase_content_area">
                    <input type="text" class="form-control" id="university" name="university" placeholder="Hello University">
                  </div>
                </div>
                <div class="form-group row showcase_row_area">
                  <div class="col-md-3 showcase_text_area">
                    <label for="inputType1">Course</label>
                  </div>
                  <div class="col-md-9 showcase_content_area">
                    <input type="text" class="form-control" id="course" name="course" placeholder="Computer Science">
                  </div>
                </div>
                <div class="form-group row showcase_row_area">
                  <div class="col-md-3 showcase_text_area">
                    <label for="inputType1">Github link</label>
                  </div>
                  <div class="col-md-9 showcase_content_area">
                    <input type="text" class="form-control" id="github" name="github" placeholder="https://www.github.com/johndoe">
                  </div>
                </div>
                  <div class="form-group row showcase_row_area">
                    <div class="col-md-3 showcase_text_area">
                      <label for="inputType1">Password</label>
                    </div>
                    <div class="col-md-9 showcase_content_area">
                      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group row showcase_row_area">
                    <div class="col-md-3 showcase_text_area">
                    </div>
                  <div class="col-md-9 showcase_content_area">
                    <button class="btn btn-primary" type="submit">Create Account</button>
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
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
