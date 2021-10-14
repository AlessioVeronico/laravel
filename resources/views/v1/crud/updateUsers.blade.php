@extends('v1.layout')

@section('content')
    

<div class="container">
    <form action="" method="POST">
        <h1 class="text-align-center mt-3">Update user:</h1>
        <input type="hidden" name="_token" value="{{ csrf_token()}}" >
        <input class="form-control  mt-3" type="text" name="name" placeholder="name" value="{{$user->name}}">
        <input class="form-control mt-3" type="text" name="email" placeholder="email" value="{{$user->email}}">
        <input class="form-control mt-3" type="text" name="password" placeholder="password" value="{{$user->password}}">
        <input type="submit" class="btn btn-primary mt-3 " value="Update user">
    </form>
</div>

@endsection