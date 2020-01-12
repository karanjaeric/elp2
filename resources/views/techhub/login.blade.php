@extends('techhub.layouts.landingpage')
@section('content')
  <div class="row">
    <div class="col-lg-6 col-md-8 col-sm-10 col-10 mx-auto">
        <div class="grid-body">
          <div class="row">
            <div class="col-lg-7 col-md-8 col-sm-9 col-12 mx-auto form-wrapper">
                <p class="grid-header">Use your Email and Password to sign in</p>
              <form action="/login" method="POST">
                @csrf
                <div class="form-group input-rounded">
                  <input type="text" class="form-control" placeholder="Email" name="email" id="email" />
                </div>
                <div class="form-group input-rounded">
                  <input type="password" class="form-control" placeholder="Password" name="password" id="password" />
                </div>
                <div class="form-inline">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" class="form-check-input" />Remember me <i class="input-frame"></i>
                    </label>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block"> Login </button>
              </form>
              @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
              @endif
              <div class="signup-link">
                <p>Don't have an account yet?</p>
                <a href="/register">Sign Up</a>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
@endsection
