@extends('layouts.app')

@section('content')

<h1>{{__('profile.welcome')}}</h1>

{{-- <div class="container">
    <h3>{{ $user->name }}</h3>

    @forelse ($user->discussions as $discussion)
        <p>{{ $discussion->post_title }}</p>
        <p>{{ $discussion->description }}</p>

        <hr>
    @empty

        <p>No posts for this user</p>
        
    @endforelse
</div> --}}

<div class="container">
    <h1>{{ $discussion->post_title }}</h1>
    <p>written by: {{ $discussion->user->country }}</p>
</div>
    
@endsection