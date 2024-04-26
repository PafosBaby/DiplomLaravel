@extends('layouts.admin')

@section('content')
    <h1 class="mb-4">{{__("New Role")}}</h1>



    <form action="{{route('admin.roles.store')}}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="name">{{__("Role")}}</label>
            <input type="text" id="name" name="name" class="form-control">
            @error('name')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <button class="btn btn-primary">{{__("Add")}}</button>
    </form>
@endsection
