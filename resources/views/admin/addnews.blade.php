@extends('admin.layouts.main')

@section('content')
<div class="container-fluid">
	<div class="row bg-title">
        <div class="">
            <h4 class="page-title">Add News</h4>
            <div class="white-box">
            	<div class="">
                	<h5 class="box-title m-t-30">Add News Item</h5>
            	</div>
            </div>
            <form method="POST" action="{{ route('postNews') }}">
            	{{ csrf_field() }}
	            <div class="white-box col-md-8">
	            	<div class="form-group col-md-12">
	                    <label class="box-title m-t-30">News Title</label>
	                    <p class="text-muted m-b-20">Eg: Prices of Gas to Soar upwards</p>
	                    <div class="">
	                       <input type="text" class="form-control" placeholder="News Title goes here" name="news_title"> 
	                   	</div>
		            </div>
		            <div class="form-group col-md-12">
	                    <label class="box-title m-t-30">News Author</label>
	                    <p class="text-muted m-b-20">Eg: Abena Konadu</p>
	                    <div class="">
	                       <input type="text" class="form-control" placeholder="Author Name goes here" name="news_author"> 
	                   	</div>
		            </div>

	                <div class="form-group col-md-4">
	                    <label class="box-title m-t-30">Choose Date of News</label>
	                    <p class="text-muted m-b-20">Click to choose Date</p>
	                    <div class="input-group">
	                        <input type="text" class="form-control" id="datepicker-autoclose" 
	                        placeholder="" name="news_date"> 
	                        <span class="input-group-addon"><i class="icon-calender"></i></span> 
	                    </div>
	                </div>

	                <div class="form-group col-md-12">
	                	<label class="box-title m-t-30">News Content</label>
	                	<p class="text-muted m-b-20">Type Your News Here</p>
	                	<textarea id="summernote" name="news_content"></textarea>
	                </div>

	                <div class="form-group m-b-0">
	                	<div class="input-group col-md-12">
	                		<button type="submit" class="btn btn-success btn-lg waves-effect waves-light m-r-10"> Post </button>
	                	</div>
	            	</div>

	            </div>
        	</form>
        </div>
    </div>

</div>


@endsection

@section('scripts')
	
	<script type="text/javascript">
	    $('#datepicker-autoclose').datepicker({
	        autoclose: true,
	        format: 'yyyy-mm-dd',
	        todayHighlight: true
	    });

	    $(document).ready(function(){
	    	$("#summernote").summernote({
	    		height: 250
	    	});	
	    });
	    
	</script>

@endsection