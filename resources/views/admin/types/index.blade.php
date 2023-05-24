
@extends('layouts.admin')

@section('content')

<div class="container py-2">
    <h1 class="text-white">Here are all the types</h1>
    <table class="text-white table">
        <thead>
            <th>Name</th>
            <th>Description</th>
            <th>Slug</th>
            <th>Commands</th>
        </thead>
        <tbody>
            @foreach ($types as $type)
            <tr>
                <td>{{$type->name}}</td>
                <td>{{$type->description}}</td>
                <td>{{$type->slug}}</td>
                <td class="text-center"><a href="{{route('admin.types.show', ['type' => $type])}}"><i class="fa-solid fa-magnifying-glass"></i></a></td>

            </tr>

            @endforeach
        </tbody>
    </table>
    <hr>
    <div class="__btns-ctn py-3">
        <button class="btn btn-primary"><a class='fw-bold' href="{{route('admin.types.create')}}">Add a new type</a></button>
    </div>
</div>

@endsection
