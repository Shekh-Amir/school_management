@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="{{ url('/store-teachers') }}" method="POST" >
            {{ csrf_field() }}
            	<legend>Add a new Teacher</legend>
            
            	<div class="form-group">
            		<label for="">Name</label>
            		<input name="name" type="text" class="form-control" id="" placeholder="Enter Name">
            	</div>
               
                <div class="form-group">
                    <label for="">Email</label>
                    <input name="email" type="text" class="form-control" id="" placeholder="Enter Email">
                </div>
            	<div class="form-group">
            		<label for="">Gender</label>
                    <select name="gender" id="inputGender" class="form-control" required="required">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
            	</div>
				
               
                <div class="form-group">
                    <label for="">Experience</label>
                    <input name="experience" type="text" class="form-control" id="" placeholder="Enter Experience">
                </div>
                <div class="form-group">
                    <label for="">Phone</label>
                    <input name="phone" type="text" class="form-control" id="" placeholder="Enter Phone">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" id="inputPassword" class="form-control" required="required" title="">
                </div>
                <div class="form-group">
                    <label for="">Password Confirmation</label>
                    <input type="password" name="password_confirmation" id="inputPassword" class="form-control" required="required" title="">
                </div>

            	
            
            	<button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection