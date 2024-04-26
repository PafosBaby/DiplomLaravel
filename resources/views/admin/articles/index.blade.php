@extends('layouts.admin')

@section('content')
    <h1 class="mb-4">{{__("All articles")}}</h1>
    @if ($articles->count())
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>{{__("Image")}}</th>
                    <th>{{__("Name")}}</th>
                    <th>{{__("Category")}}</th>
                    <th>{{__("Теги")}}</th>
                    <th>{{__("Published")}}</th>
                    <th>{{__("Show")}}</th>
                    <th>{{__("Action")}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <td style="max-width: 150px">
                            <img src="{{$article->getImage()}}" alt="" class="img-fluid">
                        </td>
                        <td>{{$article->title}}</td>
                        <td>{{$article->category->name}}</td>
                        <td>{{$article->getTags()}}</td>
                        <td>{{$article->publish_at}}</td>
                        <td>{{$article->isShowing()}}</td>

                            <td class="d-flex">
                                <a href="{{route("articles.edit", $article)}}" class='btn btn-sm btn-warning'>{{__("Edit")}}</a>
                            <form class="mx-3" action="{{route('articles.destroy', $article)}}" method="POST">
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
        <h4>{{__("template.noArticle")}}</h4>
    @endif
@endsection

@section('scripts')
        @include('layouts.admin-templates.remove-ItemScript')
@endsection
