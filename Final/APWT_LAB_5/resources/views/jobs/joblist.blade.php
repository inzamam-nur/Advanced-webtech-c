@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .firstdiv{
            background-color:white;
            margin-top:100px;
        }
    </style>
</head>
<body>
<div class="firstdiv">
<table class="table table-border">
    <tr>
        <th>Id</th>
        <th>Location</th>
        <th>Tutor_Gender</th>
        <th>Salary</th>
        <th colspan="2">Action</th>

    </tr>
    @foreach($seejobs as $list)
    <tr>
        <td>{{$list->id}}</td>
        <td>{{$list->location}}</td>
        <td>{{$list->t_gender}}</td>
        <td>{{$list->salary}}</td>
        <td><a href="/jobprofile/{{$list->id}}">Details</a></td>
    </tr>
    @endforeach
           
  
</table>
<td>  @if(Session::get('user')) 
     <center><a  class="btn btn-danger" href="{{route('logout')}}">Logout </a></center>  
    @endif</td>
</div>
 
<tr>
        


                </tr>
                    
@endsection
</body>
</html>
