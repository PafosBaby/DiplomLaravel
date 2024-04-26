@extends('layouts.admin')

@section('content')
    <h1 class="mb-4">{{__("New category")}}</h1>


    <form action="{{route("blog.categories.store")}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">{{__("Сreate сategory")}}</label>
            <input type="text" class="form-control" id="name" name="name">
            @error('name')
                <smal class="text-danger">{{$message}}</smal>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">{{__("Add")}}</button>
    </form>
@endsection
