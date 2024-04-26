@extends('layouts.admin')

@section('content')
    <h1 class="mb-4">{{__("Edit")}}.{{$tag->name}}</h1>


    <form action="{{route('tags.update', $tag)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">{{__("Сreate tags")}}</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$tag->name}}">
            @error('name')
                <smal class="text-danger">{{$message}}</smal>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">{{__("Edit")}}</button>
    </form>
@endsection
