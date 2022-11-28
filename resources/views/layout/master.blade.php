<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/favicon.png') }}">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Home | Gaia - Bootstrap Template</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/gaia.css') }}" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href='https://fonts.googleapis.com/css?family=Cambo|Lato:400,700' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('css/css/fonts/pe-icon-7-stroke.css') }}" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-default navbar-transparent navbar-fixed-top" color-on-scroll="200">
    <!-- if you want to keep the navbar hidden you can add this class to the navbar "navbar-burger"-->
    <div class="container">
        <div class="navbar-header">
            <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar bar1"></span>
                <span class="icon-bar bar2"></span>
                <span class="icon-bar bar3"></span>
            </button>
            <a href="http://www.creative-tim.com" class="navbar-brand">
                Gaia
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right navbar-uppercase">
                <li>
                    <a href="home.html">Home</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-danger">
                        <li>
                            <a href="blog-post.html">Blog post</a>
                        </li>
                        <li>
                            <a href="blog-posts.html">Blog Posts</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-danger">
                        <li>
                            <a href="about-us.html">About us</a>
                        </li>
                        <li>
                            <a href="contact-us.html">Contact us</a>
                        </li>
                        <li>
                            <a href="portfolio.html">Portfolio</a>
                        </li>
                        <li>
                            <a href="signin.html">Signin</a>
                        </li>
                        <li>
                            <a href="signup.html">Signup</a>
                        </li>
                        <li>
                            <a href="../documentation/components.html">All components</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="pricing.html">Pricing</a>
                </li>
                <li>
                    <a href="http://www.creative-tim.com/product/gaia-bootstrap-template-pro" class="btn btn-danger btn-fill">Buy now</a>
                </li>
                <li class="dropdown">
                    <a href="#gaia" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-share-alt"></i> Share
                    </a>
                    <ul class="dropdown-menu dropdown-danger">
                        <li>
                            <a href="#"><i class="fa fa-facebook-square"></i> Facebook</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram"></i> Instagram</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
</nav>


<div class="section section-header">
    <div class="parallax filter filter-color-black">
        <div class="image" style="
                 background-image:       url('https://images.unsplash.com/photo-1449247613801-ab06418e2861?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&s=bb80a15068b7e5da425b33750319daaa')">
        </div>
        <div class="container">
            <div class="content">
                <p><span>by </span>Creative Tim</p>
                <h1>Home Page</h1>
                <div class="separator-container">
                    <div class="separator line-separator">♦</div>
                </div>
                <h5>Present your company, clients and projects in a stylish way</h5>
            </div>
        </div>
    </div>
    <a href="" data-scroll="true" data-id="#firstSection" class="scroll-arrow hidden-xs hidden-sm">
        <i class="fa fa-angle-down"></i>
    </a>
</div>


<div class="section" id="firstSection">
    <div class="container">
        <div class="title-area">
            <h2>Our company will take your startup to the next level for sure!</h2>
            <div class="separator separator-danger">♦</div>
            <p class="description">
                Our company is a group of professional individuals looking to create amazing pieces of clothing. We have studied at the best schools of design, we have tailored the suits for the most stylish men in the industry, we are what you need!
            </p>
        </div>
    </div>

    <div class="parallax parallax-small">
        <div class="image" style="background-image: url('../assets/img/office-4.jpeg')"></div>
        <div class="image" style="background-image: url({{ asset('img/office-4.jpeg') }})"></div>
    </div>
</div>


<div class="section section-our-projects section-our-projects-fluid">

    <div class="title-area">
        <h5 class="subtitle text-gray">Here you can check</h5>
        <h2>Our Projects</h2>
        <div class="separator separator-danger">♦</div>
        <p class="description">
            Utah has eliminated homelessness by 91% It wasn’t any Kanyes I even had the pink polo I thought I was Kanye They think we're stupid. They do not know how to communicate.
        </p>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="project">
                    <img src="../assets/img/project-1.jpg" />
                    <a class="over-area" href="#gaia">
                        <div class="content">
                            <label class="label label-danger label-fill">Website Redesign</label>
                            <h3>Famous Website Redesign</h3>
                            <p>We will find freedom in truth as opposed to ridicule. Let's fight for our future. We can change everything. Pablo in blood It wasn’t any Kanyes</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="project">
                    <img src="../assets/img/project-5.jpg" />
                    <a class="over-area" href="#gaia">
                        <div class="content">
                            <label class="label label-success label-fill">Desktop Development</label>
                            <h3>Desktop App</h3>
                            <p>We will find freedom in truth as opposed to ridicule. Let's fight for our future. We can change everything. Pablo in blood It wasn’t any Kanyes</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="project">
                    <img src="../assets/img/project-6.jpg" />
                    <a class="over-area" href="#gaia">
                        <div class="content">
                            <label class="label label-danger label-fill">Marketing</label>
                            <h3>Social Marketing</h3>
                            <p>We will find freedom in truth as opposed to ridicule. Let's fight for our future. We can change everything. Pablo in blood It wasn’t any Kanyes</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="project">
                    <img src="../assets/img/project-4.jpg" />
                    <a class="over-area" href="#gaia">
                        <div class="content">
                            <label class="label label-danger label-fill">Website Redesign</label>
                            <h3>Behance Redesign</h3>
                            <p>We will find freedom in truth as opposed to ridicule. Let's fight for our future. We can change everything. Pablo in blood It wasn’t any Kanyes</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="project">
                    <img src="../assets/img/project-3.jpg" />
                    <a class="over-area" href="#gaia">
                        <div class="content">
                            <label class="label label-info label-fill">App Development</label>
                            <h3>Analytics App Android</h3>
                            <p>We will find freedom in truth as opposed to ridicule. Let's fight for our future. We can change everything. Pablo in blood It wasn’t any Kanyes</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="project">
                    <img src="../assets/img/project-2.jpg" />
                    <a class="over-area" href="#gaia">
                        <div class="content">
                            <label class="label label-danger label-fill">Marketing</label>
                            <h3>Social Marketing</h3>
                            <p>We will find freedom in truth as opposed to ridicule. Let's fight for our future. We can change everything. Pablo in blood It wasn’t any Kanye.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="section section-our-clients">
    <div class="container">
        <div class="title-area">
            <h5 class="subtitle text-gray">Here are some of</h5>
            <h2>Our Premium Clients</h2>

            <div class="separator separator-danger">∎</div>
        </div>

        <ul class="nav nav-text list-logos list-logos-danger" role="tablist">
            <li class="active">
                <a href="#testimonial1" role="tab" data-toggle="tab">
                    <div class="client-logo">
                        <i class="fa fa-apple"></i>
                        <h3>Apple</h3>
                    </div>
                </a>
            </li>
            <li>
                <a href="#testimonial2" role="tab" data-toggle="tab">
                    <div class="client-logo">
                        <i class="fa fa-dropbox"></i>
                        <h3>Dropbox</h3>
                    </div>
                </a>
            </li>
            <li>
                <a href="#testimonial3" role="tab" data-toggle="tab">
                    <div class="client-logo">
                        <i class="fa fa-windows"></i>
                        <h3>Microsoft</h3>
                    </div>
                </a>
            </li>
            <li>
                <a href="#testimonial4" role="tab" data-toggle="tab">
                    <div class="client-logo">
                        <i class="fa fa-skype"></i>
                        <h3>Skype</h3>
                    </div>
                </a>
            </li>

        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="testimonial1">
                <p class="description">
                    And I used a period because contrary to popular belief I strongly dislike exclamation points! We no longer have to be scared of the truth feels good to be home In Roman times the artist would contemplate proportions and colors. Now there is only one important color... Green I even had the pink polo I thought I was Kanye I promise I will never let the people down. I want a better life for all!
                </p>
            </div>
            <div class="tab-pane" id="testimonial2">
                <p class="description">Green I even had the pink polo I thought I was Kanye I promise I will never let the people down. I want a better life for all! And I used a period because contrary to popular belief I strongly dislike exclamation points! We no longer have to be scared of the truth feels good to be home In Roman times the artist would contemplate proportions and colors. Now there is only one important color...
                </p>
            </div>
            <div class="tab-pane" id="testimonial3">
                <p class="description"> I used a period because contrary to popular belief I strongly dislike exclamation points! We no longer have to be scared of the truth feels good to be home In Roman times the artist would contemplate proportions and colors. The 'Gaia' team did a great work while we were collaborating. They provided a vision that was in deep connection with our needs and helped us achieve our goals.
                </p>
            </div>
            <div class="tab-pane" id="testimonial4">
                <p class="description">The 'Gaia' team did a great work while we were collaborating. They provided a vision that was in deep connection with our needs and helped us achieve our goals. We couldn't thank the 'Gaia' team enough for their excellent service. We had an wonderful time developing the plans for our new office building and we can tell you that our employees felt at home since the first day they moved here.
                </p>
            </div>
        </div>

    </div>
</div>


<div class="section section-get-started">
    <div class="parallax filter filter-color-black">
        <div class="image" style="background-image: url('../assets/img/header-13.jpeg')">
        </div>
        <div class="container">
            <div class="title-area">
                <h2 class="text-white">Want to get started with us?</h2>
                <div class="separator">♦</div>
                <p class="description">
                    We are keen on creating a second skin for anyone with a sense of style! We design our clothes having our customers in mind and we never disappoint!
                </p>
            </div>

            <div class="button-get-started">
                <button type="button" class="btn btn-lg btn-danger btn-fill ">Get free quote</button>
            </div>
        </div>
    </div>
</div>


<footer class="footer footer-big footer-color-black" data-color="black">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-3">
                <div class="info">
                    <h5 class="title">Company</h5>
                    <nav>
                        <ul>
                            <li>
                                <a href="#">Home</a></li>
                            <li>
                                <a href="#">Find offers</a>
                            </li>
                            <li>
                                <a href="#">Discover Projects</a>
                            </li>
                            <li>
                                <a href="#">Our Portfolio</a>
                            </li>
                            <li>
                                <a href="#">About Us</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-md-3 col-md-offset-1 col-sm-3">
                <div class="info">
                    <h5 class="title"> Help and Support</h5>
                    <nav>
                        <ul>
                            <li>
                                <a href="#">Contact Us</a>
                            </li>
                            <li>
                                <a href="#">How it works</a>
                            </li>
                            <li>
                                <a href="#">Terms &amp; Conditions</a>
                            </li>
                            <li>
                                <a href="#">Company Policy</a>
                            </li>
                            <li>
                                <a href="#">Money Back</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="info">
                    <h5 class="title">Latest News</h5>
                    <nav>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter"></i> <b>Get Shit Done</b> The best kit in the market is here, just give it a try and let us...
                                    <hr class="hr-small">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter"></i> We've just been featured on <b> Awwwards Website</b>! Thank you everybody for...
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-md-2 col-md-offset-1 col-sm-3">
                <div class="info">
                    <h5 class="title">Follow us on</h5>
                    <nav>
                        <ul>
                            <li>
                                <a href="#" class="btn btn-social btn-facebook btn-simple">
                                    <i class="fa fa-facebook-square"></i> Facebook
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-social btn-dribbble btn-simple">
                                    <i class="fa fa-dribbble"></i> Dribbble
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-social btn-twitter btn-simple">
                                    <i class="fa fa-twitter"></i> Twitter
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-social btn-reddit btn-simple">
                                    <i class="fa fa-google-plus-square"></i> Google+
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <hr>
        <div class="copyright">
            © <script> document.write(new Date().getFullYear()) </script> Creative Tim, made with love
        </div>
    </div>
</footer>

</body>

<!--   core js files    -->
<script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/bootstrap.js') }}" type="text/javascript"></script>

<!--  js library for devices recognition -->
<script type="text/javascript" src="{{ asset('js/modernizr.js') }}"></script>

<!--  script for google maps   -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!--   file where we handle all the script from the Gaia - Bootstrap Template   -->
<script type="text/javascript" src="{{ asset('js/gaia.js') }}"></script>

</html>
