@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        <a href="{{url('/create-classrooms')}}"><button type="button" class="btn btn-lg btn-info">Add a new classroom</button></a>
        <hr><br>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>ClassGroup</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($all_Clasrooms as $classroom)
                    <tr>
                        <td>{{ $classroom->id }}</td>
                        <td>{{ $classroom->name }}</td>
                        <td>{{ $classroom->classgroups->name }}</td>
                        <td><a href="{{url('/edit-classrooms/'.$classroom->id)}}"><button type="button" class="btn btn-priamry">Edit</button></a></td>
                        <td><a href="{{url('/delete-classrooms/'.$classroom->id)}}"><button type="button" class="btn btn-danger">Delete</button></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection