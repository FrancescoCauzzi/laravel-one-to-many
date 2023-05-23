@extends('layouts.admin')

@section('content')
<div class="container text-white">
    <h1>{{ ucwords(Auth::user()->name )}}'s dashboard</h1>
    <ul>
        <li>
            <button class="btn btn-primary"><a class="fw-bold" href="{{route('admin.projects.index')}}">Show me all the projects</a></button>

        </li>
    </ul>
</div>
@endsection
