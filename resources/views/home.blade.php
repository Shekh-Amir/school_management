@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
           
         
        
       
        <div class="jumbotron">
            <div class="container">
                <h1>Hello Dear Student</h1>
                <p>Click button below to access your space</p>
                <p>
                    <a href="#" class="btn btn-info btn-lg">Access my space</a>
                </p>
            </div>
        </div>
        

       
        <div class="jumbotron">
            <div class="container">
                <h1>Hello Dear Teacher</h1>
                <p>Click button below to access your space</p>
                <p>
                    <a href="{{ url('/create-teachers') }}" class="btn btn-info btn-lg">Access my space</a>
                </p>
            </div>
        </div>
       

        
        <div class="jumbotron">
            <div class="container center">
                <h2>Hello Dear Admin</h2>
                <p class="lead">What do you want to do</p>
                <p>
                    <p><a href="{{ url('/show-students') }}" class="btn btn-success btn-lg">Show students</a></p>
                    <p><a href="{{ url('/show-teachers') }}" class="btn btn-success btn-lg">Show teachers</a></p>
                    <p><a href="{{ url('/show-classrooms/{id}') }}" class="btn btn-success btn-lg">Show classgroups</a></p>
                    <p><a href="#" class="btn btn-success btn-lg">Show levels</a></p>
                </p>
            </div>
        </div>
       

       
            <div class="row">
                <div class="col-md-6">
                    <div class="jumbotron">
                        <div class="container">
                            <h2>Are you a teacher?</h2>
                        <p>
                            <a href="#" class="btn btn-primary btn-lg">Sign Up Here</a>
                        </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="jumbotron">
                        <div class="container">
                            <h2>Are you a Student?</h2>
                        <p>
                            <a href="#" class="btn btn-primary btn-lg">Sign Up Here</a>
                        </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="jumbotron">
                        <div class="container">
                            <h3>Already registered</h3>
                        <p class="lead">
                            <a href="#" class="btn btn-success btn-lg">Log In</a>
                        </p>
                        </div>
                    </div>
                </div>
                
            </div>    
          


        </div>
    </div>
</div>


@endsection
