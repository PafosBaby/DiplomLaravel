@extends('layouts.admin')

@section('content')
    <h1 class="mb-4">{{__("Edit")}}.{{ $category->name}}</h1>


    <form action="{{route('blog.categories.update', $category)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">{{__("Сreate сategory")}}</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$category->name}}">
            @error('name')
                <smal class="text-danger">{{$message}}</smal>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">{{__("Edit")}}</button>
    </form>
@endsection
