<nav class="navbar navbar-default navbar-fixed-top">
    <!-- if you want to keep the navbar hidden you can add this class to the navbar "navbar-burger"-->
    <div class="container">
        <div class="navbar-header">
            <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar bar1"></span>
                <span class="icon-bar bar2"></span>
                <span class="icon-bar bar3"></span>
            </button>
            <a class="navbar-brand">
                Dashboard
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right navbar-uppercase">
                <li>
                    <a href="{{route('welcome.index')}}">Home</a>
                </li>
{{--                <li class="dropdown">--}}
{{--                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="caret"></span></a>--}}
{{--                    <ul class="dropdown-menu dropdown-danger">--}}
{{--                        <li>--}}
{{--                            <a href="blog-post.html">Blog post</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="blog-posts.html">Blog Posts</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="dropdown">--}}
{{--                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>--}}
{{--                    <ul class="dropdown-menu dropdown-danger">--}}
{{--                        <li>--}}
{{--                            <a href="about-us.html">About us</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="contact-us.html">Contact us</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="portfolio.html">Portfolio</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="signin.html">Signin</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="signup.html">Signup</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="../documentation/components.html">All components</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
                <li>
                    <a href="{{ route('posts.index') }}">Posts</a>
                </li>
                <li>
                    <a href="{{ route('categories.index') }}">Categories</a>
                </li>
{{--                <li>--}}
{{--                    <a href="http://www.creative-tim.com/product/gaia-bootstrap-template-pro" class="btn btn-danger btn-fill">Buy now</a>--}}
{{--                </li>--}}
{{--                <li class="dropdown">--}}
{{--                    <a href="#gaia" class="dropdown-toggle" data-toggle="dropdown">--}}
{{--                        <i class="fa fa-share-alt"></i> Share--}}
{{--                    </a>--}}
{{--                    <ul class="dropdown-menu dropdown-danger">--}}
{{--                        <li>--}}
{{--                            <a href="#"><i class="fa fa-facebook-square"></i> Facebook</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#"><i class="fa fa-twitter"></i> Twitter</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#"><i class="fa fa-instagram"></i> Instagram</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
</nav>
