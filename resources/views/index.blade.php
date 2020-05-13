@extends('layouts.main')
@section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel"><!--banner slides start-->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"> </li>
                <li data-target="#myCarousel" data-slide-to="1"> </li>
                <li data-target="#myCarousel" data-slide-to="2"> </li>
                <li data-target="#myCarousel" data-slide-to="3"> </li>
                <li data-target="#myCarousel" data-slide-to="4"> </li>
                <li data-target="#myCarousel" data-slide-to="5"> </li>
                
            </ol>
            
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="imgs/banner1.jpg">
                    <div class="carousel-caption"><!--Adding Caption to banner-->
                        <br>
                        <h1 style="color: #ff690b; text-shadow: none;"><b>Welcome To Andev Company Limited</b></h1>
                    </div>
                </div><!--End active-->
                    <div class="item"><!--  Adding more images-->
                        <img src="imgs/banner3.jpg">
                    </div><!--end of 3-->
                    <div class="item"><!--  Adding more images-->
                        <img src="imgs/gasFill%20professional.jpg">
                    </div><!--end of 4-->
                    <div class="item"><!--  Adding more images-->
                        <img src="imgs/gasFillSecurity.jpg">
                    </div><!--end of 5-->
                    <div class="item"><!--  Adding more images-->
                        <img src="imgs/carFill.jpg">
                    </div><!--end of 6-->
                    <div class="item"><!--  Adding more images-->
                        <img src="imgs/banner4.jpg">
                    </div><!--end of 7-->
            </div><!--inner carousel ends here-->
                    <div><!--Start controls-->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>  
                    </div><!--Adding controls-->
        </div><!--End of slider-->
      
        <!--rows & Colums-->
        <div class="container text-center">
            
            <h1 class="hd"><b>We Are Happy To See You Here</b></h1>
            <p class="text-center hd1-txt" style="font-size: 18px;">
            Andev Company Limited is an organization dedicated to delivering comprehensive retailing & freighting solutions of Liquefied Petroleum Gas (LPG) from various nationwide depots to retailers or dealers.`Andev’s charter encompasses the Freighting of LPG products, Marketing and sale of LPG products, Financing of LPG stations, Design of LPG stations, Construction of LPG stations, Turn-key management of LPG stations, LPG technical consultancy and Supplier of LPG station/freighting-related equipments.
            </p>
            <!--rows & Colums-->
            <div class="row">
                <div class="col-sm-4 cl-1" >
                    <img src="imgs/prdsAcl.jpg" class="img-thumbnail" />
                    <br>
                    <h4><a href="{{ url('products') }}" class="btn_hm btn_hm_1" style="line-height: 5px;"><b>Our Products</b></a></h4>
                    <br>
                </div>
                <div class="col-sm-4 cl-2" >
                    <img src="imgs/servicesAcl.jpg" class="img-thumbnail" />
                    <br>
                    <h4><a href="{{ url('services') }}" class="btn_hm btn_hm_1" style="line-height: 5px;"><b>Services</b></a></h4>
                    <br>
                </div>
                
                <div class="col-sm-4 cl-3">
                    <img src="imgs/news.jpg" class="img-thumbnail" />
                    <br>
                    <h4><a href="{{ url('news') }}" class="btn_hm btn_hm_1" style="line-height: 5px;"><b>News...</b></a></h4>
                    <br>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-md-6 vs-1" style="text-align: justify; font-size: 18px;";>
                    <h2 align="center"><b>Vision</b></h2>
               The vision of Andev Company Limited is to create an efficient indigenous LPG freighting and marketing company which will provide unmatched excellent and qualitative services throughout the country. This will be done through the incorporation of innovative methodologies, technology and varied experiences in Ghana’s downstream petroleum industry.

                </div>
                <div class="col-md-6 ms-1" style="text-align: justify; font-size: 18px;";>
                 <!--put image or text here ie <img src="" class="img-responsive">-->
                    
                    <h2 align="center"><b>Mission</b></h2>
               The Company’s mission is to offer an efficient and reliable alternative service to clients in the domestic, commercial and industrial sectors of the country.

                </div>
            </div>
        </div>
        
         <div class="container text-center">
            <h3><b>Connect With Us...</b></h3>
            <hr style="color: #ff6c00;">
            <h3 class="ft-logo"><span style="color: orangered;"><b>ANDEV</b></span> <b>COMPANY LIMITED</b></h3>
            
              <div class="social">
                  <a href="https://www.facebook.com/Andev-Company-Limited-2228117720755545/"><i class="fa fa-facebook"></i></a>
                  <a href="https://twitter.com/AndevLtd"><i class="fa fa-twitter"></i></a>
                    <i class="fa fa-instagram"></i>
              </div>
        </div>

@endsection

@section('scripts')
    <script>
        window.sr = ScrollReveal();
        sr.reveal('.hd', {
            duration: 2000,
            origin: 'top',
            distance: '100px'
        })
        sr.reveal('.hd1-txt', {
            duration: 2000,
            origin: 'bottom',
            distance: '100px'
        })
        sr.reveal('.cl-1', {
            duration: 2000,
            origin: 'bottom',
            distance: '100px'
        })
        sr.reveal('.cl-2', {
            duration: 2500,
            origin: 'bottom',
            distance: '100px'
        })
        sr.reveal('.cl-3', {
            duration: 3000,
            origin: 'bottom',
            distance: '100px'
        })
        sr.reveal('.vs-1', {
            duration: 2000,
            origin: 'right',
            distance: '100px'
        })
        sr.reveal('.ms-1', {
            duration: 2000,
            origin: 'left',
            distance: '100px'
        })
        sr.reveal('.fa-facebook', {
            duration: 2000,
            origin: 'bottom',
            distance: '100px'
        })
         sr.reveal('.fa-twitter', {
            duration: 2500,
            origin: 'bottom',
            distance: '100px'
        })
        sr.reveal('.fa-instagram', {
            duration: 3000,
            origin: 'bottom',
            distance: '100px'
        })
            
    </script>


@endsection