@extends('layouts.admin')
@section('content')
    <h1 class="mb-4">{{__("All сategories")}}</h1>
    @if($categories->count())
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>{{__("Category")}}</th>
                <th>{{__("Action")}}</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($categories as $cat)
                <tr>
                    <td>{{ $cat->id }}</td>
                    <td>{{ $cat->name }}</td>
                    <td class="d-flex">
                            <a href="{{route("blog.categories.edit", $cat)}}" class='btn btn-sm btn-warning'>{{__("Edit")}}</a>
                        <form class="mx-3" action="{{route('blog.categories.delete', $cat)}}" method="POST">
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
        <h4>{{__('template.noCategories')}}</h4>
    @endif

@endsection

@section('scripts')
    @include('layouts.admin-templates.remove-ItemScript')
@endsection
