@extends('layouts.app')


@section('content')
<div class="container">
<h1>Dashboard</h1>
    
<h2>this is dashboard</h2>



 <div class="container">
    {{-- <h3>{{ $discussion->post_title }}</h3>
    <p>{{ $discussion->description }}</p>
    <p>{{ $discussion->brief }}</p> --}}


    @forelse ($discussions as $discussion)
    <button type="button" class="btn btn-primary">Delete</button>
    <p>{{ $discussion->post_title }}</p> 
    <p>{{ $discussion->description }}</p> 
    <p>{{ $discussion->description }}</p>

    <hr>
    @empty
    <p>No posts for this user</p>
    @endforelse
        

     {{-- @forelse ($discussion->discussions as $discussion)
        <p>{{ $discussion->post_title }}</p>
        <p>{{ $discussion->description }}</p>

        <hr>
    @empty

        <p>No posts for this user</p>
        
    @endforelse  --}}
</div> 
@endsection