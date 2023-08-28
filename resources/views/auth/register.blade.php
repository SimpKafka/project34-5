@extends('layouts.masterauthen')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-md-4 col-md-4 col-sm-4 col-xs-12">
            <div class="text-center m-b-md custom-login" style="color:white">
                <h3>PLEASE SIGN UP TO APP</h3>
                <p>This is the best app ever!</p>
            </div>
            <div class="hpanel">
                <div class="panel-body">
                    <form action="#" id="loginForm" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <label class="control-label" for="email">Name</label>
                            <input type="text" placeholder="name" title="Please enter you name" required=""  name="name" id="name" class="form-control">
                            <span class="help-block small">Your unique name to app</span>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="email">Email</label>
                            <input type="email" placeholder="email" title="Please enter you username" required=""  name="email" id="email" class="form-control">
                            <span class="help-block small">Your Email</span>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password">Password</label>
                            <input type="password" title="password" placeholder="Enter Your Password" required=""  name="password" id="password" class="form-control">
                            <span class="help-block small">Enter Your Password</span>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password">Confirm Your Password</label>
                            <input type="password" title="confirmpassword" placeholder="Enter Your Password Again" required=""  name="password_confirmation" id="confirmpassword" class="form-control">
                            <span class="help-block small">Confirm Your Password</span>
                        </div>
                        
                        <input type="submit" class="btn btn-success btn-block loginbtn" value="Sign Up">
                        <a class="btn btn-default btn-block" href="{{ route('login') }}">Log In</a>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
    </div>
   
</div>

@endsection