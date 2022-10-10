@extends('layouts.app')

@section('content')

<div class="login-registration">
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Register</a>
        </li>
      </ul>
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
          <div class="login-form">
            <div class="row">
              <div class="col-lg-3"></div>
              <div class="col-lg-6">
                <form>
                  <div class="form-group">
                    <div class="fb-goo">
                      <button type="button" class="btn btn-primary btn-lg btn-block facebook"><i class="fa fa-facebook-f"></i>&nbsp;&nbsp;Login with Facebook</button>
                      <button type="button" class="btn btn-primary btn-lg btn-block google"><i class="fa fa-google"></i>&nbsp;&nbsp;Login with Google</button>
                    </div>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                    <a href="#" class="float-right">Forget Password ?</a>
                  </div>
                  <button type="button" class="btn btn-primary btn-lg btn-block facebook"><i class="fa fa-sign-in"></i>&nbsp;&nbsp;Login</button>
                </form>
              </div>
              <div class="col-lg-3"></div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
          <div class="login-form">
            <div class="row">
              <div class="col-lg-3"></div>
              <div class="col-lg-6">
                <form>
                  <div class="craete-account">
                    <p>Create an account using</p>
                  </div>
                  <div class="fb-goo">
                    <button type="button" class="btn btn-primary btn-lg btn-block facebook"><i class="fa fa-facebook-f"></i>&nbsp;&nbsp;Register with Facebook</button>
                    <button type="button" class="btn btn-primary btn-lg btn-block google"><i class="fa fa-google"></i>&nbsp;&nbsp;Register with Google</button>
                  </div>
                  <div class="craete-account">
                    <p>Or create an account by filling up some details below</p>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputName1" aria-describedby="emailHelp" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Confirm Password">
                  </div>
                  <button type="button" class="btn btn-primary btn-lg btn-block facebook"><i class="fa fa-sign-in"></i>&nbsp;&nbsp;Register</button>
                </form>
              </div>
              <div class="col-lg-3"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection