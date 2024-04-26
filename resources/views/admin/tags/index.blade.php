@extends('layouts.admin')
@section('content')
    <h1 class="mb-4">{{__("All tags")}}</h1>
    @if($tags->count())
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>{{__("Tags")}}</th>
                <th>{{__("Action")}}</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($tags as $tag)
                <tr>
                    <td>{{ $tag->id }}</td>
                    <td>{{ $tag->name }}</td>
                    <td class="d-flex">
                            <a href="{{route("tags.edit", $tag)}}" class='btn btn-sm btn-warning'>{{__("Edit")}}</a>
                        <form class="mx-3" action="{{route('tags.destroy', $tag)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button href="#" class='btn btn-sm btn-danger btn-remove'>{{__("Delete")}}</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <h4>{{__('template.noTags')}}</h4>
    @endif

@endsection

@section('scripts')
    @include('layouts.admin-templates.remove-ItemScript')
@endsection
