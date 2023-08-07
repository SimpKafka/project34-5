@extends('layouts.masterauthen')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-md-4 col-md-4 col-sm-4 col-xs-12">
            <div class="text-center m-b-md custom-login">
                <h3>PLEASE SIGN UP TO APP</h3>
                <p>This is the best app ever!</p>
            </div>
            <div class="hpanel">
                <div class="panel-body">
                    <form action="#" id="loginForm" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <label class="control-label" for="email">Username</label>
                            <input type="text" placeholder="username" title="Please enter you username" required="" value="" name="name" id="username" class="form-control">
                            <span class="help-block small">Your unique username to app</span>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="email">Email</label>
                            <input type="email" placeholder="email" title="Please enter you username" required="" value="" name="email" id="email" class="form-control">
                            <span class="help-block small">Your Email</span>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password">Password</label>
                            <input type="password" title="password" placeholder="Enter Your Password" required="" value="" name="password" id="password" class="form-control">
                            <span class="help-block small">Enter Your Password</span>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password">Confirm Your Password</label>
                            <input type="password" title="confirmpassword" placeholder="Enter Your Password Again" required="" value="" name="password_confirmation" id="confirmpassword" class="form-control">
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
    <div class="row">
        <div class="col-md-12 col-md-12 col-sm-12 col-xs-12 text-center">
            <p>Copyright © 2018 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved.</p>
        </div>
    </div>
</div>

@endsection