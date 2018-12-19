@extends('admin.layouts.main')

@section('content')
<div class="container-fluid">
    <div class="row bg-title">
        <div class="">
            <h4 class="page-title">Dashboard</h4>
            <div class="white-box">
                
            	<div class="">
                	<h5 class="box-title m-t-30">Archived News</h5>
                	Put a search bar here and a date range selector
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
            		<tr>
            			  @foreach($news as $newsItem)

            			  	<tr>
            				<td>
            					{{ $newsItem->news_title }}
            				</td>
            				<td>
            					{!! substr($newsItem->news_content, 0, 50) !!}
            				</td>
            				<td>
            					{{ gmdate("Y-m-d", $newsItem->news_date_unix) }}
            				</td>

                            <td>
                                <button class="btn btn-outline btn-default waves-effect waves-light"> <i class="fa fa-box-open m-r-5"></i> <span>Unarchive</span>
                                </button>
                                <button class="btn btn-outline btn-primary waves-effect waves-light"> <i class="fa fa-pencil m-r-5"></i> <span>Edit</span>
                                </button>
                                <button class="btn btn-outline btn-danger waves-effect waves-light"> <i class="fa fa-trash m-r-5"></i> <span>Delete</span>
                                </button>
                            </td>



            			  @endforeach
            		</tr>
            	</table>
            </div>

        </div>
    </div>
</div>


@endsection