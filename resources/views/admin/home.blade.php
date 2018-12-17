@extends('admin.layouts.main')

@section('content')
<div class="container-fluid">
    <div class="row bg-title">
        <div class="">
            <h4 class="page-title">Dashboard</h4>
            <div class="white-box">
                
            	<div class="">
                	<h5 class="box-title m-t-30">Current News List</h5>
                	<div> 
	            		<a class="btn btn-primary" href="{{ url('admin/add_news') }}"> 
	            			Add News 
	            		</a>
            		</div>
            	</div>
            
            </div>  
            <div class="white-box">
            	<table class="table">
            		
            		<thead>
            			<tr>
	            			<th>
	            				Title
	            			</th>
	            			<th>
	            				Snippet
	            			</th>
	            			<th>
	            				Date Published
	            			</th>
	            			<th>Action</th>
	            		</tr>
            		</thead>
            		<tbody>
                        @foreach($news as $newsItem)
            			<tr>
            				<td>
            					{{ $newsItem->news_title }}
            				</td>
            				<td>
            					{!! substr($newsItem->news_content, 0, 50)) !!}
            				</td>
            				<td>
            					{{ $newsItem->news_date_unix }}
            				</td>

            			</tr>
                        @endforeach
            		</tbody>

            	</table>
            </div>
        </div>
    </div>



</div>

 @endsection
