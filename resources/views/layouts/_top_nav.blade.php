<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Welome To || Andev Company Limited</title>
        <meta name="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <link rel="stylesheet" href="fonts/css/font-awesome.css" />
        <link rel="stylesheet" href="css/company.css" />
        <link rel="shortcut icon" href="imgs/favicon.png" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Muli" rel="stylesheet"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="css/lightbox.min.css" rel="stylesheet" type="text/css">
        <script src="animJS/scrollreveal.min.js"></script>
        <script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
    </head> 
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="background: #ff6c00; border-bottom: : 1px solid black;">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">
					<img src="imgs/logoandevgh.png"/>
					</a>
                </div><!--End of navheader-->
                <div class="collapse navbar-collapse" id="myNavbar"><!--main Nav-->
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/team') }}">Our Team</a></li>
                        <!--
                        <li><a href="info.html">About Us<span class="caret"></span></a>
                            <ul class="drop-menu">
                                <li><a href="#">Info</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Products</a></li>
                            </ul>
                        
                        </li>
                        -->
                        
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">About Us <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('/info') }}">Info</a></li>
                                <li><a href="{{ url('/news') }}">News</a></li>
                            </ul>
                        </li>
                        
                        <li><a href="{{ url('/services') }}">Services</a></li>
                        <li><a href="{{ url('/products') }}">Products</a></li>
                        <!--<li><a href="ordergas.html">Online Gas</a></li>-->
                        <li><a href="{{ url('/contact_us') }}">Contact</a></li>
                        <li><a href="{{ url('/admin/home') }}">Admin</a></li>
                    </ul>
                </div><!--End of collapsenavbar-->
            </div><!--End of container-->
        </nav><!--nav bar ends here-->