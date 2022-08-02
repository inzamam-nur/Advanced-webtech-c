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

}</style>
</head>
<body>
<div class="container">
  <div class="row justify-content-center">
  <div class="col-md-5">
   <div class="card">
     <h2 class="card-title text-center">Tutor Registration</h2>
      <div class="card-body py-md-4">
       <form action="{{route('tutor_regi')}}" class="form-group" method="post">
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
             <input type="text" name="name" class="form-control" id="name"  value="{{old('name')}}"  placeholder="Name">
             @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <div class="form-group">
             <input type="email" name="email" class="form-control" id="email" value="{{old('email')}}" placeholder="Email">
             @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
                            </div>
                            
                          
   <div class="form-group">
     <input type="password" name="password" class="form-control" id="password" value="{{old('password')}}" placeholder="Password">
     @error('password')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
     <input type="number" name="phone" class="form-control" id="password" value="{{old('phone')}}" placeholder="Phone">
     @error('phone')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
     <input type="text" name="address" class="form-control" id="address" value="{{old('address')}}" placeholder="address">
     @error('address')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
   <div class="d-flex flex-row align-items-center justify-content-between">
   <input type="submit" class="btn btn-primary" value="Create account">
   <button  class="btn btn-primary" >  
     <a href="{{route('login')}}">login</a>
</button>
    
          </div>
       </form>
     </div>s
  </div>
</div>
</div>
</div>
@endsection



</body>
</html>
