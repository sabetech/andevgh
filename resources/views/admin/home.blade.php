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
            			<tr>
            				<td>
            					News Title Goes here
            				</td>
            				<td>
            					News Snippet here
            				</td>
            				<td>
            					24th December, 2018
            				</td>

            			</tr>
            		</tbody>

            	</table>
            </div>
        </div>
    </div>



</div>

 @endsection
