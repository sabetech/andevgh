@extends('layouts.main')
@section('content')    

<!--Team of expect large image-->
            
        <div id="myCarousel" class="carousel slide" data-ride="carousel"><!--banner slides start-->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"> </li>
            </ol>
            
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="exTeam/exmng.jpg" />
                </div><!--End active-->
                   
            </div><!--inner carousel ends here-->
        </div><!--End of slider-->
      
        <!--rows & Colums-->
        <section id="contact">
            <div class="container">
                <div class="row">
                    
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12" style="font-size: 15px;">
                        <!--creating contact form-->
                        <h1><b>Contact Us</b></h1>
                        <p>Send Us A Message Using The Form Below</p>
                        <form method="" action="">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Enter Your Name...">
                            </div>
                            
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Enter Your E-Mail...">
                            </div>
                            
                            <div class="form-group">
                                <textarea rows="6" name="msg" class="form-control" placeholder="Leave Us A Message..."></textarea>
                            </div>
                            
                            <div class="checkbox">
                                <label> 
                                    <input type="checkbox">I am human.   
                                </label> 
                            </div>
        
                            <input type="submit" name="submit" class="btn btn-success" value="Send..." />
                            
                        </form>
                    </div>    
                    
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 item" style="font-size: 15px;">
                        <h1><b>Location</b></h1>
                        <p>Follow The Direction On The Map</p>    
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1734.457887162374!2d0.0018217959883104857!3d5.665028030694019!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10207f5dee87e3f1%3A0x7702968c7972afa6!2sMax+Mart!5e0!3m2!1sen!2sgh!4v1514949269577" width="500" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>

                    
                </div>
            </div>
        </section>
        
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