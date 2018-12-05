@extends('layouts.main')
@section('content')    
        <div id="myCarousel" class="carousel slide" data-ride="carousel"><!--banner slides start-->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"> </li>
            </ol>
            
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="imgs/serv2.jpg" />
                </div><!--End active-->
                   
            </div><!--inner carousel ends here-->
        </div><!--End of slider-->
      
        <!--rows & Colums-->
        <div class="container text-center shw" style="font-size: 15px;">
            
            <h1>Our Services</h1>
            
            <!--rows & Colums-->
            
               
        </div>
            <!--Creating two column layout with boot strap-->     
            <div class="item-2">
               <div class="container" style="font-size: 15px;">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 item">
                        <img class="img-fluid" src="imgs/products/rtl-andev.jpg" alt="Retail" />
                        </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 item item-text">
                        <h3><b>RETAILING OF LPG</b></h3>
                        <p>
                            Distribution of LPG in Bulk, from Depots to Dealer Stations and bulk consumers such as Food processing and Manufacturing Industries at competitive prices. We ensure that our supplies are on time.  
                        </p>
                        </div>
                    </div>
                </div>
                
                
                <div class="container" style="font-size: 15px;">    
                    <div class="row row-even">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 item order-2">
                        <img class="img-fluid" src="imgs/products/frgth-andev.jpg" alt=""/>
                        </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 item item-text order-1">
                        <h3><b>FREIGHTING</b></h3>
                        <p>
                         Transporting of LPG for LPGMCs and Bulk consumers, we have modern vehicles (trucks) that are equipped with local tracking device together with a tracker from the National Petroleum Authority (NPA) to monitor timely delivery of product.
                        </p>
                        </div>
                    </div>
                </div>

                <div class="container" style="font-size: 15px;">    
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 item">
                        <img class="img-fluid" src="imgs/products/fntk-andev.jpg" alt=""/>
                        </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 item item-text">
                        <h3><b>FINANCING AND TURN-KEY MANAGEMENT OF LPG STATION</b></h3>
                        <p>
                         With our well experienced and key management, we offer managerial and financial assistance to promising but challenging LPG stations.
This enables Andev Company Limited to manage the said business/station on your behalf, in an efficient and effective manner to give optimum output.
                        </p>
                        </div>
                    </div>
                </div>
                <div class="container" style="font-size: 15px;">    
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 item">
                        <img class="img-fluid" src="imgs/products/DizC-andev.jpg" alt=""/>
                        </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 item item-text">
                        <h3><b>DESIGN AND CONSTRUCTION OF LPG STATION</b></h3>
                        <p>
                         Andev Company Limited also Design and Construct LPG station. Our designs and constructions are in line to meet the requirements of the regulatory bodies in the industry (National Petroleum Authority, Environmental Protection Agency, Ghana National Fire Service etc.).
                        </p>
                        </div>
                    </div>
                </div>
                
            </div>

@endsection