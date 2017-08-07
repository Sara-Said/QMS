@extends('layouts.app')

@section('content')
<!--<hr>
@if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif-->

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                
                <div class="panel-body">
                    You are logged in! <?php // echo "you are ". $value = Session::get('user_id');?>
                    
                    <div style="padding-left: 410px;"> <img src="{{URL::to('/')}}/img/logo.png"/> </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
