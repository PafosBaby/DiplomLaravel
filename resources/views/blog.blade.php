@extends('layouts.app')



@section('content')
    <div class="clearfix"></div>

    <section>
        <div class="header-inner two">
            <div class="inner text-center">
                <h1 class="title text-white uppercase">{{ $category->name }}</h1>
            </div>
            <div class="overlay bg-opacity-5"></div>
            <img src="http://placehold.it/1920x800" alt="" class="img-responsive" />
        </div>
    </section>
    <!-- end header inner -->
    <div class="clearfix"></div>

    <section>
        <div class="pagenation-holder">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Новостной блог</h3>
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="pagenation_links"><a href="{{ url('/') }}">Главная</a><i> / </i>
                            <a href="#" style="color: red">{{ $category->name }}</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!--end section-->
    <div class="clearfix"></div>



    <section class="sec-padding">
        <div class="container">
            <div class="row">
                @foreach ($category->articles as $article)
                    @if ($article->is_active != null)
                        <!--Start item-->
                        <div class="col-md-12 bmargin">
                            <div class="blog-holder-12">
                                <div class="image-holder">
                                    <div class="overlay bg-opacity-1">
                                        <a href="#">
                                            <div class="icon"><i class="fa fa-search"></i></div>
                                        </a>
                                        {!!$article->getDate()!!}
                                    </div>
                                    <img class="img-responsive img-fluid" alt="{{ $article->title }}"
                                        src="{{ $article->getImage() }}">
                                </div>
                            </div>

                            <div class="clearfix"></div>
                            <br />
                            <a href="{{ route('blog.article', [$category->slug, $article->slug]) }} ">
                                <h3 class="less-mar1">
                                    {{ $article->title }}
                                </h3>
                            </a>
                            <div class="blog-post-info"> <span><i class="fa fa-user"></i></span> <span><i
                                        class="fa fa-comments-o"></i> {{-- {{ $article->comments->count() }} {{__('Comments')}} --}}</span> </div>
                            <br />
                            <p>{{ $article->short_description }}</p>
                            <br />
                            <a class="btn btn-orange-2 dark btn-round" href=" {{ route('blog.article', [$category->slug, $article->slug]) }} ">Читать</a>

                        </div>
                        <!--end item-->

                        <div class="clearfix"></div>
                        <div class="col-divider-margin-4"></div>
                    @else()
                    @endif()
                @endforeach


            </div>

            <div class="clearfix"></div>
            <br />


            <div class=" divider-line solid light margin opacity-7"></div>
            <div class="col-md-12">
                <ul class="blog-pagenation">
                    <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li><a class="active" href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>

            </div>
        </div>
        </div>
    </section>
    <div class="clearfix"></div>
@endsection
