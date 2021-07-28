@extends('layouts.app')

@section('content')
<div class="container">
<h1>login</h1>
    
<form action="/confirm" method="POST">
    <div class="form-group">
        @csrf
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</div>
  {{-- <form action='/confirm' method="POST">

    <div  class="form-group"  >
        @csrf
      <label for="exampleInputEmail1">Enter Url Here</label>
      <input type="text" class="form-control" name='url'>
    </div>
  
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form> --}}
@endsection