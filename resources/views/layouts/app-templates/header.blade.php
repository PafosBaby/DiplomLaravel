    <div class="topbar dark topbar-padding">
        <div class="container">
            <div class="topbar-left-items">
                <ul class="toplist toppadding pull-left paddtop1">
                    <li class="rightl">Customer Care</li>
                    <li>(888) 123-4567</li>
                </ul>
            </div>
            <!--end left-->

            <div class="topbar-right-items pull-right">
                <ul class="toplist toppadding">
                    <li><a href="#"><i class="fa fa-search"></i> &nbsp;</a></li>
                    <li><a href="https://www.facebook.com/codelayers"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/codelayers"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li class="nav-item dropdown"><a href="#"> USD</a></li>
                    <li class="lineright"><a href="{{route('app.change-locale','en')}}" @if(app()->getLocale('lang')=='en')class="active"@endif>Еn</a></li>
                    <li><a href="{{route('app.change-locale','ru')}}" @if(app()->getLocale('lang')=='ru')class="active"@endif>Ru</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="topbar white">
        <div class="container">
            <div class="topbar-left-items">
                <div class="margin-top1"></div>
                <ul class="toplist toppadding pull-left paddtop1">
                    <li class="lineright"><a href="{{route('login')}}">{{__("Login")}}</a></li>
                    <li><a href="{{route('register')}}">{{__("Register")}}</a></li>
                </ul>
            </div>
            <!--end left-->

            <div class="topbar-middle-logo no-bgcolor"><a href="index.html"><img src="images/logo.png" alt=""/></a>
            </div>
            <!--end middle-->

            <div class="topbar-right-items pull-right">
                <div class="margin-top1"></div>
                <ul class="toplist toppadding">
                    <li class="lineright"><a href="#">{{__("My Account")}}</a></li>
                    <li class="lineright"><a href="#">{{__("Checkout")}}</a></li>
                    <li class="last"><a href="#">{{__("Cart")}} (0)</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--end topBar-->
    <div class="clearfix"></div>

    <div id="header">
        <div class="container">
            <div class="navbar red-2 navbar-default yamm">
                <div class="navbar-header">
                    <button type="button" data-toggle="collapse" data-target="#navbar-collapse-grid"
                            class="navbar-toggle two three"><span class="icon-bar"></span><span class="icon-bar"></span><span
                                class="icon-bar"></span></button>
                </div>
                <div id="navbar-collapse-grid" class="navbar-collapse collapse">
                    <ul class="nav red-2 navbar-nav">
                        <li><a href="{{route('home')}}" class="dropdown-toggle">{{__("Home")}}</a></li>
                        <li><a href="#" class="dropdown-toggle">{{__("About")}}</a></li>
                        <li class="nav-item dropdown"><a href="#" class="dropdown-toggle">{{__("Blog")}}</a>
                            <ul class="dropdown-menu">
                                @foreach ($categories as $cat)
                                <li>
                                    <div class="container">
                                        <div class="row">
                                            <ul class="list-unstyled col-sm-12 col-md-12">
                                                <li class="text-uppercase" ><a href="{{route('blog.category', $cat->slug)}}">{{$cat->name}}</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="sales-and-deals.html" class="dropdown-toggle">{{__("Sales & Deals")}}</a></li>
                        <li><a href="contact.html" class="dropdown-toggle">{{__("Contact")}}</a></li>
                    </ul>
                    <br/>
                    <a href="Sales-and-deals.html" class="dropdown-toggle pull-right btn btn-red round">{{__("Shop")}}</a>
                </div>
            </div>
        </div>
    </div>
    <!--end menu-->
