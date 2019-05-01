@extends('layouts.backend.khmer24_layout')

@push('css')
	<link  href="{{asset('assets/css/post.css')}}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="{{asset('css/upload.css')}}">
	<link rel="stylesheet" href="{{asset('css/bootstrap-fileupload.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/dropzone.css')}}">
	<style type="text/css">
    .pddb20 {
        padding-bottom: 20px;
    }
    .pddt20 {
        padding-bottom: 20px;
    }
    .img {
        width: 100px;
        height: 100px;
        margin: 0.2em -0.7em 0 0;
        cursor: pointer;
    }

    .img-responsive{
    	cursor: pointer;
    }
		.remove_img_preview {
		    position: relative;
		    bottom: 41px;
		    right: 10px;
		    background: #ffffff9e;
		    color: #b50707;
		    border-radius: 50px;
		    font-size: 15px;
		    padding: 0 5px 0;
		    text-align: center;
		    cursor: pointer;
		    font-weight: bold;
		}
    .remove_img_preview:before {
        content: "X";
    }
     .hidden{
        display: none;
     }		
		.my-card-columns {
		    -webkit-column-count: 2;
		    -moz-column-count: 2;
		    column-count: 2;
		    -webkit-column-gap: 1.25rem;
		    -moz-column-gap: 1.25rem;
		    column-gap: 1.25rem;
		    orphans: 1;
		    widows: 1;
		}
	</style>
@endpush

@section('content')

	<div class="container">
	<div class="post_form bg-white rounded border my_content">
		<div class="header p-3">
			<h1 class="title">POST FREE AD</h1>
			<div class="step">
				<ul class="list-unstyled">
				<li class="active"><span class="text"><i>1</i> Choose a category</span></li>
				<li class="active"><span class="text"><i>2</i> Fill Description</span></li>
				</ul>
			</div>
		</div>

		<div class="post_form p-3">
			<div class="post_form">
				<form action="{{route('post.store')}}" class="form form-horizontal" method="post" accept-charset="utf-8" enctype="multipart/form-data" id="form_post">
					{{csrf_field()}}		
						@include('freeads.form')
		</div>
	
@endsection

@push('js')
<script src="{{asset('js/upload.js')}}"></script>
<script src="{{asset('js/dropzone.js')}}"></script>
<script>
	$(document).ready(function(){
	// distrct get data by provice change
	  $('#province').change(function(){
	 	 	var provinceID = $(this).val();
	    if(provinceID>=1){
	        $.ajax({
	           type:"GET",
	           url:"{{url('get-district-list')}}?province_id="+provinceID,
	           success:function(res){               
	            if(res){
	            		// $("#district").removeAttr('disabled');
	            		$("#district" ).prop( "disabled", false );
	                $("#district").empty();
	                $("#district").append('<option value="0" data-value="">Select a Khan/District</option>');
	                $.each(res,function(key,value){
	                    $("#district").append('<option value="'+key+'">'+value+'</option>');
	                });           
	            }else{
	               $("#district").empty();
	               $("#district" ).prop( "disabled", true );
	               $("#commune" ).prop( "disabled", true );
	            }
	           }
	        });
	    }else{
	        $("#district").empty();
	        $("#commune").empty();
	        $("#district").append('<option value="0" data-value="">Select a Khan/District</option>');
	        $("#commune").append('<option value="0" data-value="">Select a Sangkat/Commune</option>');
	        $("#district" ).prop( "disabled", true );
	        $("#commune" ).prop( "disabled", true );
	    }      
	  });
	// commune get data by district change    
	  $('#district').on('change',function(){
	    var districtID = $(this).val();
	    if(districtID>=1){
	        $.ajax({
	           type:"GET",
	           url:"{{url('get-commune-list')}}?district_id="+districtID,
	           success:function(res){               
	            if(res){
	            		$("#commune" ).prop( "disabled", false );
	                $("#commune").empty();
	                $("#commune").append('<option value="0" data-value="">Select a Sangkat/Commune</option>');
	                										
	                $.each(res,function(key,value){
	                  $("#commune").append('<option value="'+key+'">'+value+'</option>');
	                });
	           
	            }else{
	               $("#commune").empty();
	               $("#commune" ).prop( "disabled", true );
	            }
	           }
	        });
	    }else{
	      $("#commune").empty();
	      $("#commune").append('<option value="0" data-value="">Select a Sangkat/Commune</option>');
	      $("#commune" ).prop( "disabled", true );
	    }        
	  });
	});
</script>
{{-- @include('freeads.script.kimsan') --}}
{{-- @include('freeads.script.khmer24') --}}
@endpush