@extends('layouts.admin')

@section('content')
    <h1 class="mb-4">{{ __('All Roles') }}</h1>
    @if ($roles->count())
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>{{ __('Role') }}</th>
                    <th>{{ __('Rights') }}</th>
                    <th>{{ __('Action') }}</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($roles as $role)
                    <tr>
                        <td>{{ $role->name }}</td>
                        <td>
                            @if ($role->permissions->count())
                                @foreach ($role->permissions as $perm)
                                    @if ($loop->index != $role->permissions->count() - 1)
                                        {{ $perm->name . ',' }}
                                    @else
                                        {{ $perm->name }}
                                    @endif
                                @endforeach
                            @endif --}}
                        </td>
                        <td class="d-flex">
                            <a href="{{ route('admin.roles.edit', $role) }}"class='btn btn-sm btn-warning'>{{__("To change")}}</a>
                            <form action="{{ route('admin.roles.delite', $role) }}" method="POST" class="mx-2">
                                @csrf
                                @method('DELETE')
                                <button class='btn btn-sm btn-danger btn-remove'>{{__("Delite")}}</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else()
        <h2>{{ __('There is not one role yet') }}</h2>
    @endif()
@endsection

@section('scripts')
    @include('layouts.admin-templates.script')
@endsection
