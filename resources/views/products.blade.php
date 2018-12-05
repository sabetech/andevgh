@extends('layouts.main')
@section('content')    

<!--Team of expect large image-->
            
        <div id="myCarousel" class="carousel slide" data-ride="carousel"><!--banner slides start-->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"> </li>
            </ol>
            
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="imgs/products/pbanners.jpg" />
                </div><!--End active-->
                   
            </div><!--inner carousel ends here-->
        </div><!--End of slider-->
      
        <!--rows & Colums-->
        <div class="container text-center">
            
            <h1 class="hd-1"><b>Our Products</b></h1>
           
            <!--rows & Colums-->
            
               
        </div>
            <!--Creating two column layout with boot strap-->     
            
               <div class="container" style="font-size: 15px;">
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail mg-1">
                                <a href="images/prd-1-big.jpg" data-lightbox="mygallery" data-title="Lanfeng Power Board" class="prds">
                                <img src="images/prd-1.jpg" alt="Product One">
                                </a>
                              <div class="caption">
                                  <h3><b>Power Board</b></h3>
                              </div>
                            </div>
                          </div>
                        
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail mg-2">
                                <a href="images/prd-2-big.jpg" data-lightbox="mygallery" data-title="Filters" class="prds">
                                <img src="images/prd-2.jpg" alt="Product Two">
                                </a>
                              <div class="caption">
                                  <h3><b>Filters</b></h3>
                              </div>
                            </div>
                          </div>
                        
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail mg-3">
                                <a href="images/prd-3-big.jpg" data-lightbox="mygallery" data-title="Solenoid Valve" class="prds">
                                <img src="images/prd-3.jpg" alt="Product Three">
                                </a>
                              <div class="caption">
                                  <h3><b>Solenoid Valve</b></h3>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
        
        
        <div class="container" style="font-size: 15px;">
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail mg-4">
                                <a href="images/prd-4-big.jpg" data-lightbox="mygallery" data-title="Lanfeng Keypad" class="prds">
                                <img src="images/prd-4.jpg" alt="Product Four">
                                </a>
                              <div class="caption">
                                  <h3><b>Keypad</b></h3>
                              </div>
                            </div>
                          </div>
                        
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail mg-5">
                                <a href="images/prd-5-big.jpg" data-lightbox="mygallery" data-title="Lanfeng Display" class="prds">
                                <img src="images/prd-5.jpg" alt="Product Five">
                                </a>
                              <div class="caption">
                                  <h3><b>Display board</b></h3>
                              </div>
                            </div>
                          </div>
                        
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail mg-6">
                                <a href="images/prd-6-big.jpg" data-lightbox="mygallery" data-title="Lanfeng Pulsers" class="prds">
                                <img src="images/prd-6.jpg" alt="Product Six">
                                </a>
                              <div class="caption">
                                  <h3><b>Pulsers</b></h3>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
        
        
        <div class="container" style="font-size: 15px;">
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail mg-7">
                                <a href="images/prd-7-big.jpg" data-lightbox="mygallery" data-title="Discharge Pump with Motor" class="prds">
                                <img src="images/prd-7.jpg" alt="Product Seven">
                                </a>
                              <div class="caption">
                                  <h3><b>Discharge Pump with Motor</b></h3>
                              </div>
                            </div>
                          </div>
                        
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail mg-8">
                                <a href="images/prd-8-big.jpg" data-lightbox="mygallery" data-title="Lanfeng LPG Dispenser" class="prds">
                                <img src="images/prd-8.jpg" alt="Product Eight">
                                </a>
                                <div class="caption">
                                  <h3><b>LPG Dispenser</b></h3>
                                </div>
                            </div>
                          </div>
                        
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail mg-9">
                                <a href="images/prd-9-big.jpg" data-lightbox="mygallery" data-title="Nozzles" class="prds">
                                <img src="images/prd-9.jpg" alt="Product Eight">
                                </a>
                                <div class="caption">
                                  <h3><b>Nozzles</b></h3>
                                </div>
                            </div>
                          </div>
        
                    </div>
                </div>
@endsection

@section('scripts')
	
	<script>
            window.sr = ScrollReveal();
            sr.reveal('.hd-1', {
                duration: 2000,
                origin: 'bottom',
                distance: '100px'
            })
             sr.reveal('.txt-1', {
                duration: 2000,
                origin: 'top',
                distance: '100px'
            })
             sr.reveal('.mg-1', {
                duration: 2000,
                origin: 'top',
                distance: '100px'
            })
            sr.reveal('.mg-2', {
                duration: 2000,
                origin: 'bottom',
                distance: '200px'
            })
             sr.reveal('.mg-3', {
                duration: 2000,
                origin: 'top',
                distance: '300px'
            })
            sr.reveal('.mg-4', {
                duration: 2000,
                origin: 'bottom',
                distance: '300px'
            })
             sr.reveal('.mg-5', {
                duration: 2000,
                origin: 'top',
                distance: '300px'
            })
            sr.reveal('.mg-6', {
                duration: 2000,
                origin: 'bottom',
                distance: '300px'
            })
             sr.reveal('.mg-7', {
                duration: 2000,
                origin: 'top',
                distance: '300px'
            })
            sr.reveal('.mg-8', {
                duration: 2000,
                origin: 'bottom',
                distance: '300px'
            })
            sr.reveal('.mg-9', {
                duration: 2000,
                origin: 'top',
                distance: '300px'
            })
            
            
        </script>


@endsection
