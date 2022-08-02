@extends('layouts.app')
        @section('content')
        <br>
        <br>
        <br>
        <div style="background-color: white";>
        <h1 style="background-color: black; text-align: center">Your Profile</h1>
            <table class="table table-border" style="text-align: center">
                <tr hidden>
                    <td>ID:</td>
                    <td>{{$tutor->id}}</td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>{{$tutor->name}}</td>
                </tr>

                <tr>
                    <td>E-mail</td>
                    <td>{{$tutor->email}}</td>
                </tr>

                <tr>
                    <td>Phone number</td>
                    <td>{{$tutor->phone}}</td>
                </tr>

                <tr>
                    <td>Address</td>
                    <td>{{$tutor->address}}</td>
                </tr>                

                
                <tr>
                    <td>        <a class="btn btn-danger" href="{{route('tutordash')}}">Back </a>
</td>
                    <td><a class="btn btn-success" href="/tutorEdit/{{$tutor->id}}">Edit</a></td>
                    <td>  @if(Session::get('user')) 
        <a class="btn btn-danger" href="{{route('logout')}}">Logout </a>
    @endif</td>


                </tr>
                    

            </table>

        </div>
            
            
            
        @endsection