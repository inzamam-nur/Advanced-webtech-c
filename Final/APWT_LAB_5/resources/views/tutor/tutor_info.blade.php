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
        h3{
  font-family: Calibri; 
  font-size: 25pt;         
  font-style: normal; 
  font-weight: bold; 
  color:#20c997;
  text-align: center; 
  text-decoration: underline
}

table{
  font-family: Calibri; 
  color:white; 
  font-size: 11pt; 
  font-style: normal;
  font-weight: bold;
  text-align:; 
  background-color: #20c997; 
  border-collapse: collapse; 
  border: 2px solid navy
}
table.inner{
  border: 0px
}
    </style>
</head>
<body>
<html>
<head>
<title>Additional_info Form</title>

</head>
 
<body>
<h3>Additional Information</h3>

 
<table align="center" cellpadding = "10">

<form action="{{route('additional_info')}}" class="form-group" method="post">
    {{csrf_field()}}
 
<!----- First Name ---------------------------------------------------------->
<tr>
<td>FIRST NAME</td>
<td><input type="text" name="First_Name" maxlength="30"/>
</td>
</tr>
 
<!----- Last Name ---------------------------------------------------------->
<tr>
<td>LAST NAME</td>
<td><input type="text" name="Last_Name" maxlength="30"/>
</td>
</tr>
 

<!----- Email Id ---------------------------------------------------------->
<tr>
<td>EMAIL ID</td>
<td><input type="text" name="Email_Id" maxlength="100" /></td>
</tr>
 
<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>MOBILE NUMBER</td>
<td>
<input type="text" name="Mobile_Number" maxlength="11" />
</td>
</tr>
 
<!----- Gender ----------------------------------------------------------->
<tr>
<td>GENDER</td>
<td>
Male <input type="radio" name="Gender" value="Male" />
Female <input type="radio" name="Gender" value="Female" />
</td>
</tr>
 
<!----- Address ---------------------------------------------------------->
<tr>
<td>Tutorin Area <br /><br /><br /></td>
<td><textarea name="Address" rows="4" cols="30"></textarea></td>
</tr>
 
<!----- City ---------------------------------------------------------->
<tr>
<td>Location</td>
<td><input type="text" name="City" maxlength="30" />
</td>
</tr>
 


 
<tr>
<td>Available Time</td>
<td><input type="text" name="availabletime" value=""  /></td>
</tr>
<tr>
<td>Qualification<br /><br /><br /></td>
<td><textarea name="qualification" rows="4" cols="30"></textarea></td>
</tr>
 
<!----- Hobbies ---------------------------------------------------------->
 
<tr>
<td>Tutoring Type <br /><br /><br /></td>
 
<td>
Online
<input type="checkbox" name="online" value="Online" />
In home
<input type="checkbox" name="In_home" value="In_home" />

<br />

</td>
</tr>
 
<tr>

<!----- Course ---------------------------------------------------------->
<tr>
<td>Classes<br />APPLIED FOR</td>
<td>
  class 1-5
<input type="radio" name="class1-5" value="class1-5">
class 6-10
<input type="radio" name="class6-10" value="class6-10">
College
<input type="radio" name="College" value="College">
</td>
</tr>

 
<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center">
<input type="submit" value="Submit">
<input type="reset" value="Reset">
</td>
</tr>
</table>
 
</form>
 
</body>
</html>
@endsection