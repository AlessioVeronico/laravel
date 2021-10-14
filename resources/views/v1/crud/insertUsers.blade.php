@extends('v1.layout')

@section('content')
    

<div class="container">
    <form action="" method="POST">
        <h1 class="text-align-center mt-3">Insert user:</h1>
        <input type="hidden" name="_token" value="{{ csrf_token()}}" >
        <input class="form-control  mt-3" type="text" name="name" placeholder="name">
        <input class="form-control mt-3" type="text" name="email" placeholder="email">
        <input class="form-control mt-3" type="text" name="password" placeholder="password">
        <input type="submit" class="btn btn-primary mt-3 " value="Add user">
    </form>
</div>

@endsection

       