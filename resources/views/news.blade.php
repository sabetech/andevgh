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
            
            <h1><b>News Posted From {{ $news[0]->news_author }}</b></h1>
                           
            </div>
        <div class="container" style="font-size: 15px;">
        <div class="row">

        <div class="col-sm-8 blog-main">

          @foreach($news as $newsItem)
          <div class="blog-post">
            <h3 class="blog-post-title"><b>{{ $newsItem->news_title }}</b></h3>
            <p class="blog-post-meta">{{ gmdate("Y-m-d", $newsItem->news_date_unix) }} by <a href="#">{{ $newsItem->news_author }}</a></p>

            {!! $newsItem->news_content !!}
          </div><!-- /.blog-post -->
          @endforeach


          <nav>
            <ul class="pager">
              <li><a href="#">Previous</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </nav>

        </div><!-- /.blog-main -->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">
              <h3><b>News Items</b></h3>
            @foreach($newsAll as $newsItem)
            <a href="{{ url('news/'.$newsItem->id) }}" class="list-group-item active">{{ $newsItem->news_title }}</a>
            @endforeach

          </div>
        </div><!--/.sidebar-offcanvas-->
            
            <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">
              <h3><b>Archives</b></h3>
            <a href="#" class="list-group-item active">Price 2013</a>
            <a href="#" class="list-group-item">Products 2013</a>
            
          </div>
        </div><!--/.sidebar-offcanvas-->

      </div><!-- /.row -->

    </div><!-- /.container -->
@endsection