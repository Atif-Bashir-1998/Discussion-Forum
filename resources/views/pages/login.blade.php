@extends('layouts.app')


@section('content')
<div class="container">
<h1>login</h1>





@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    
<form action="/login" method="POST">
    <div class="form-group">
        @csrf
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">

    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Password">
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