@extends('layouts.masterauthen')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-md-4 col-md-4 col-sm-4 col-xs-12">
            <div class="text-center" style="color:white">
                <h1>PLEASE LOGIN TO APP</h1>
                <p>This is the best app ever!</p>
            </div>
            <div class="hpanel">
                <div class="panel-body">
                    <form action="#" id="loginForm" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label class="control-label" for="email">Email</label>
                            <input type="eamil" title="Please enter you email" required=""  name="email" id="email" class="form-control">
                            <span class="help-block small">Your unique email to app</span>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password">Password</label>
                            <input type="password" title="Please enter your password" placeholder="******" required=""  name="password" id="password" class="form-control">
                            <span class="help-block small">Yur strong password</span>
                        </div>
                       
                        <input type="submit" class="btn btn-success btn-block loginbtn" value="Login">
                        <a class="btn btn-default btn-block" href="{{ route('register') }}">Register</a>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
    </div>

</div>

@endsection