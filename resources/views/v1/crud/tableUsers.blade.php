@extends('v1.layout')

@section('content')

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>PASSWORD</th>
            </tr>
        </thead>
        <tbody> 
            @foreach ($user as $user1)
            <tr>
                <td>{{$user1->id}}</td>
                <td>{{$user1->name}}</td>
                <td>{{$user1->email}}</td>
                <td>{{$user1->password}}</td>
                <td><a href="{{route('updateUsers', $user1->id)}}" class="btn btn-success">Update</a><a href="{{route('deleteUsers', $user1->id)}}" class=" btn btn-danger">Delete</a></td>
            </tr>
            
            @endforeach
        </tbody>
        
    </table>
    {{$user->links()}}
</div>

@endsection