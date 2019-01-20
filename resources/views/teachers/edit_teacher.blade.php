@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="{{url('/update-teachers/'.$single_teacher->id) }}" method="POST" role="form">
            {{ csrf_field() }}
            	<legend>Edit a Teacher</legend>
            
            	<div class="form-group">
            		<label for="">Name</label>
            		<input name="name" type="text" class="form-control" id="" placeholder="Enter Name" value="{{ $single_teacher->name}}">
            	</div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input name="email" type="text" class="form-control" id="" placeholder="Enter Email" value="{{ $single_teacher->email}}">
                </div>
            	<div class="form-group">
            		<label for="">Experience</label>
            		<input name="experience" type="text" class="form-control" id="" placeholder="Enter Experience" value="{{ $single_teacher->experience}}">
            	</div>
                <div class="form-group">
                    <label for="">Phone</label>
                    <input name="phone" type="text" class="form-control" id="" placeholder="Enter Phone" value="{{ $single_teacher->phone}}">
                </div>
				
            	
            
            	<button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection