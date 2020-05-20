@extends('fontend.layouts.master_template')
@section('title') Login @endsection
@section('content')
    
        <div class="container mt-5">
            <form method="post" action="" class="col-md-4 offset-md-4 card">
                <p class="text-center"><img src="{{asset('assets/img/logo-3.png')}}" alt="codelavel" width="150"></p>
                <div class="form-group row">
                    <label for="Username" class="col-sm-4 col-form-label">Username</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="Username" id="Username" placeholder="Username">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Password" class="col-sm-4 col-form-label">Password</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" name="password" id="password" placeholder="password">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Login" class="col-sm-4 col-form-label"></label>
                    <div class="col-sm-8">
                        <input type="submit" class="btn btn-primary btn-block" value="Login">
                    </div>
                </div>
            </form>
        </div>



@endsection