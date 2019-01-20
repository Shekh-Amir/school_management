@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        <a href="{{ url('/create-teachers') }}"><button type="button" class="btn btn-lg btn-info">Add a new teacher</button></a>
        <hr><br>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Experience</th>
                        <th>Phone</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($all_teachers as $teacher)
                    <tr>
                        <td>{{ $teacher->id }}</td>
                        <td>{{ $teacher->name }}</td>
                        <td>{{ $teacher->email }}</td>
                        
                        <td>{{ $teacher->experience }}</td>
                        <td>{{ $teacher->phone }}</td>
                      
                        <td><a href="{{ URL::to('/edit-teachers/'.$teacher->id) }}"><button type="button" class="btn btn-priamry">Edit</button></a></td>
                        <td><a href="{{ URL::to('/delete-teachers/'.$teacher->id) }}"><button type="button" class="btn btn-danger">Delete</button></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection