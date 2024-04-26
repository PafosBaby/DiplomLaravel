@extends('layouts.admin')

@section('content')
    <h1 class="mb-4">Изменить роль</h1>



    <form action="{{route("admin.roles.update" , $role)}}" method="POST">
        @csrf @method('put')
        <div class="form-group mb-3">
            <label for="name">Роль</label>
            <input type="text" id="name" name="name" class="form-control" value="{{old('name', $role->name )}}">
            @error('name')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        @if ($permissions->count())
            <div class="form-group mb-3">
                @foreach ($permissions as $permission)
                    <div class="form-check" >
                        <input class="form-check-input" type="checkbox" name="permissions[]" value="{{ $permission->name }}"
                            id="{{ 'permission_' . $permission->id }}" @if ($role->hasPermissionTo($permission->name)) checked @endif>
                        <label class="form-check-label" for="{{ 'permission_' . $permission->id }}">
                            {{ $permission->name }}
                        </label>
                    </div>
                @endforeach
            </div>
        @endif
        <button class="btn btn-primary">Изменить</button>
    </form>
@endsection
