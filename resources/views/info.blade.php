@extends('layouts.main')
@section('content')
<!--Info notes image here-->
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
        <div class="container text-center">
            
            <h1>What You Need To Know</h1>
            <p align="justify" style="font-size: 15px;">
                
            Andev Company Limited was established in 2012 by Mr. Andrews B. Owusu and his partner Dr. Franklin D. Nkansah. It is a limited liability company and a profit making organization dedicated to delivering comprehensive retailing and freighting solutions of Liquefied Petroleum Gas (LPG). It started as a full LPG Transporting company and applied for a licence to operate as a Liquified Petroleum Gas Marketing Company (LPGMC) later in the year 2012. In the year 2013 it was fully licenced by the National Petroleum Authority (NPA).
                <br>
                <br>
Andev’s charter encompasses the retail of LPG to sponsored outlets, freighting of LPG from various nationwide depots to retailers or dealers on behalf of their Liquified Petroleum Gas Marketing Companies (LPGMC's), financing of LPG stations, design of LPG stations, construction of LPG stations, turn-key management of LPG stations, LPG technical consultancy and Supplier of LPG station/freighting-related equipments.

            </p>
            <!--rows & Colums-->
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="text-align: justify";>
                      <h2 align="center">Vision</h2>
                 <div style="font-size: 15px;">   
               The vision of Andev Company Limited is to create an efficient indigenous LPG freighting and marketing company, which will provide unmatched excellent and qualitative services throughout the country. This will be done through the incorporation of innovative methodologies, technology and varied experiences in Ghana’s downstream petroleum industry.
                    </div>
                </div>
                <div class="col-md-6" style="text-align: justify";>
                 <!--put image or text here ie <img src="" class="img-responsive">-->
                    
                    <h2 align="center">Mission</h2>
                    <div style="font-size: 15px;">
               The Company’s mission is to offer an efficient and reliable alternative service to clients in the domestic, commercial, and industrial sectors of the country.
                    </div>
                </div>
            </div>
        </div>

@endsection