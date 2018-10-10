<!-- BEGIN TOP BAR -->
<div class="pre-header">
    <div class="container">
        <div class="row">
            <!-- BEGIN TOP BAR LEFT PART -->
            <div class="col-md-6 col-sm-6 additional-shop-info">
                <ul class="list-unstyled list-inline">
                    <li><i class="fa fa-phone"></i><span>09339472473</span></li>
                    <li><i class="fa fa-envelope-o"></i><span>info@keenthemes.com</span></li>
                </ul>
            </div>
            <!-- END TOP BAR LEFT PART -->
            <!-- BEGIN TOP BAR MENU -->
            <div class="col-md-6 col-sm-6 additional-nav">
                <ul class="list-unstyled list-inline pull-right">
                    @if(!Auth::check())
                        <li><a href="{{ route('login') }}">Log In</a></li>
                        <li><a href="{{ route('register') }}">Registration</a></li>
                    @else
                        <li>
                            <a href="javascript:;">
                                <i class="nav-icon fa fa-bell-o"></i>
                            </a>
                        </li>

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                                <i class="nav-icon fa fa-pencil"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-write">
                                <li class="write-icon">
                                    <a class="" href="{{ route('posts.create') }}">
                                        <i class="nav-icon fa fa-newspaper-o"></i>
                                        Posts and Questions
                                    </a>
                                </li>
                                <li class="write-icon">
                                    <a class="" href="{{ route('posts.create') }}">
                                        <i class="nav-icon fa fa-map-marker"></i>
                                        Selling Products
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                                <i class="nav-icon fa fa-user"></i>
                                {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li class="user-icon"><a href="{{ route('users.timeline', auth()->user()->id) }}"><i
                                                class="nav-icon fa fa-user"></i>Timeline</a></li>
                                <li class="user-icon"><a href="{{ route('users.show', auth()->user()->id) }}"><i
                                                class="nav-icon fa fa-cog"></i>My Account</a></li>
                                <li class="user-icon"><a href="{{ route('logout') }}"><i
                                                class="nav-icon fa fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
            <!-- END TOP BAR MENU -->
        </div>
    </div>
</div>
<!-- END TOP BAR -->
<!-- BEGIN HEADER -->
<div class="header" id="header-scroll">
    <div class="container">
        <a class="site-logo" href="{{ route('home') }}">
            <img src="{{ asset('source/frontend/theme/assets/frontend/layout/img/logos/logo-corp-red.png') }}">
        </a>

        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        <!-- BEGIN NAVIGATION -->
        <div class="header-navigation pull-right font-transform-inherit">
            <ul>
                <li class="dropdown dropdown-megamenu">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                        IT
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="header-navigation-content">
                                <div class="row">
                                    <div class="col-md-6 header-navigation-col">
                                        <h4>Backend</h4>
                                        <ul>
                                            <li><a href="index.html">Astro Trainers</a></li>
                                            <li><a href="index.html">Basketball Shoes</a></li>
                                            <li><a href="index.html">Boots</a></li>
                                            <li><a href="index.html">Canvas Shoes</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 header-navigation-col">
                                        <h4>Frontend</h4>
                                        <ul>
                                            <li><a href="index.html">Belts</a></li>
                                            <li><a href="index.html">Caps</a></li>
                                            <li><a href="index.html">Gloves</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                        English
                    </a>
                    <ul class="dropdown-menu">
                        <li class=""><a href="blog.html">Blog Page</a></li>
                        <li><a href="blog-item.html">Blog Item</a></li>
                    </ul>
                </li>
                <li class="dropdowns">
                    <a class="" href="javascript:;">
                        About us
                    </a>
                </li>

                <li class="menu-search">
                    <span class="sep"></span>
                    <i class="fa fa-search search-btn"></i>
                    <div class="search-box">
                        {!! Form::open(['route' => 'search.post', 'method' => 'get']) !!}
                        <div class="input-group">
                            {!! Form::text('key', null, ['id' => 'tags', 'class' => 'form-control', 'onkeyup' => 'autoComplete()', 'placeholder' => trans('en.tag.search')]) !!}
                            <span class="input-group-btn">
                      <button class="btn btn-primary" type="submit">Search</button>
                    </span>
                        </div>
                        {{ Form::close() }}
                    </div>
                </li>
            </ul>
        </div>
        <!-- END NAVIGATION -->
    </div>
</div>
<!-- Header END -->
