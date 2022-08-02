@extends('layouts.app')
        @section('content')
        <br>
        <br>
        <br>
        <div style="background-color: white";>
        <h1 style="background-color: black; text-align: center">Job Profile</h1>
            <table class="table table-border" style="text-align: center">
                <tr hidden>
                    <td>ID:</td>
                    <td>{{$seejob->id}}</td>
                </tr>
                <tr>
                    <td>location</td>
                    <td>{{$seejob->location}}</td>
                </tr>

                <tr>
                    <td>Subjects</td>
                    <td>{{$seejob->subjects}}</td>
                </tr>

                <tr>
                    <td>Day-per-week</td>
                    <td>{{$seejob->Day_per_week}}</td>
                </tr>

                <tr>
                    <td>Student-Gender</td>
                    <td>{{$seejob->s_gender}}</td>
                </tr>    
                <tr>
                    <td>Teacher-Gender</td>
                    <td>{{$seejob->t_gender}}</td>
                </tr>   
               
                    <td>Salary</td>
                    <td>{{$seejob->salary}}</td>
                </tr>            

                
                <tr>
                    


                </tr>


            </table>
      
            <center><a  class="btn btn-danger" href="{{route('applyjobs')}}">Applyjobs </a></center>  


        </div>
            
            
            
        @endsection