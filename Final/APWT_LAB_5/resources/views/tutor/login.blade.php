
@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>@import url('https://fonts.googleapis.com/css?family=PT+Sans');

body{
  background: ##212529
;
  font-family: 'PT Sans', sans-serif;
}
h2{
  padding-top: 1.5rem;
}
a{
  color: #333;
}
a:hover{
  color: #da5767;
  text-decoration: none;
}
.card{
  border: 0.40rem solid #f8f9fa;
  top: 10%;
}
.form-control{
  background-color: #f8f9fa;
  padding: 20px;
  padding: 25px 15px;
  margin-bottom: 1.3rem;
}

.form-control:focus {

    color: #000000;
    background-color: #ffffff;
    border: 3px solid #da5767;
    outline: 0;
    box-shadow: none;

}

.btn{
  padding: 0.6rem 1.2rem;
  background: #da5767;
  border: 2px solid #da5767;
}
.btn-primary:hover {

    
    background-color: #df8c96;
    border-color: #df8c96;
  transition: .3s;

}

</style>
</head>
<body>
<div class="container">
  <div class="row justify-content-center">
  <div class="col-md-5">
   <div class="card">
   <h2 class="card-title text-center">Welcome Tutor</h2>
         <div class="card-body py-md-4">
       <form action="{{route('login')}}" class="form-group" method="post">
    {{csrf_field()}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
          <div class="form-group">
             <input type="text" name="name" class="form-control" id="name"   placeholder="Name">
             @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
        </div>    
   <div class="form-group">
     <input type="password" name="password" class="form-control" id="password"  placeholder="Password">
     @error('password')
            <span class="text-danger">{{$message}}</span>
        @enderror
        <div class="form-group">
                        <input type="checkbox" name="remember" id="remember"class="btn btn-success" value="remember"> <span style="color: Black" >Remember me</span>
                    </div>
                    <br>
    </div>
   <div class="d-flex flex-row align-items-center justify-content-between">
   <input type="submit" class="btn btn-primary" value="Login">
   <button  class="btn btn-primary" >   <a href="{{route('tutor_regi')}}">Create account</a>
</button>

          </div>
          

       </form>
     </div>
  </div>
</div>
</div>
</div>
@endsection



</body>
</html>



