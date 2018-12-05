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
            <div class="white-box col-md-8">
            	<div class="form-group col-md-12">
                    <label class="box-title m-t-30">News Title</label>
                    <p class="text-muted m-b-20">Eg: Prices of Gas to Soar upwards</p>
                    <div class="">
                       <input type="text" class="form-control" placeholder="News Title goes here"> 
                   	</div>
	            </div>

                <div class="form-group col-md-4">
                    <label class="box-title m-t-30">Choose Date of News</label>
                    <p class="text-muted m-b-20">Click to choose Date</p>
                    <div class="input-group">
                        <input type="text" class="form-control" id="datepicker-autoclose" 
                        placeholder=""> 
                        <span class="input-group-addon"><i class="icon-calender"></i></span> 
                    </div>
                </div>

                <div class="form-group col-md-12">
                	<label class="box-title m-t-30">News Content</label>
                	<p class="text-muted m-b-20">Type Your News Here</p>
                	<textarea id="summernote" name="editNews"></textarea>
                    
                </div>
            </div>
        </div>
    </div>

</div>


@endsection

@section('scripts')
	
	<script type="text/javascript">
	    $('#datepicker-autoclose').datepicker({
	        autoclose: true,
	        format: 'dd-mm-yyyy',
	        todayHighlight: true
	    });

	    $(document).ready(function(){
	    	$("#summernote").summernote({
	    		height: 250
	    	});	
	    });
	    
	</script>

@endsection