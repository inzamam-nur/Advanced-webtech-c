@extends('layouts.app')
        @section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome To Tutor Wanted </h1>
    <center><a  class="btn btn-danger" href="{{route('profile')}}">Profile </a></center>  <br><br><br>
    <td>  @if(Session::get('user')) 
     <center><a  class="btn btn-danger" href="{{route('logout')}}">Logout </a></center>  
    @endif</td>


</body>
</html>
        @endsection
