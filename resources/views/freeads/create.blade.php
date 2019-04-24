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
    }
    .remove_img_preview {
       position: relative;
        bottom: 95px;
        right: -80px;
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
        content: "×";
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
		@include('freeads.form')
	</div>
	
@endsection

@push('js')
<script src="{{asset('js/upload.js')}}"></script>
<script src="{{asset('js/dropzone.js')}}"></script>

<script type="text/javascript">

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

	$("input#price").keypress(number);
  $("input#discount").keypress(number);
 	$("input#company_phone").keypress(number);

  function number(event) {
    var key = window.event ? event.keyCode : event.which;
    if (event.keyCode === 8 || event.keyCode === 46) {
      return true;
    } else if (key < 48 || key > 57) {
      return false;
    } else {
      return true;
    }
  };

  function readURL(input) {
  	if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#img-feature').attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
  	}
  }

  $("#feature").change(function(e) {
      readURL(this);
  });

  $(document).on('click','.fileupload-exists' , function () {
  	$('#blah').attr('src', '{{asset('img/product.png')}}');
  });

 	$("#img-feature").click(function () {
    $("#feature").trigger('click');
	});

	$(document).ready(function(){
	  $(document).on('click','img.img', function(e){
	  	 $("#input-"+e.target.id ).trigger('click');
	  });

		function call_add_more(){
			var count = $('.images').length;
				var i = $('.images:last').attr('id');
	  	i = parseInt(i.replace(/[^0-9]/g, '')) + 1;
			if(count>=6){ //alert("Only 6 textboxes allow");
	    	return false;
			}
			var images = $(document.createElement('div'));
				images.after().html('<div class="col-sm-4 images" id="image-'+ i +'">\
	            <div class="fileupload fileupload-new" data-provides="fileupload">\
	                <div class="input-append hidden">\
	                    <div class="uneditable-input">\
	                        <i class="fa fa-file fileupload-exists"></i>\
	                        <span class="fileupload-preview"></span>\
	                    </div>\
	                    <span class="btn btn-default btn-file">\
	                        <span class="fileupload-exists">Change</span>\
	                    <span class="fileupload-new">Select file</span>\
	                    <input class="hidden" id="input-img-image-'+ i +'" name="images[]" type="file" onchange="loadFile(event,'+i+')"/>\
	                    </span>\
	                </div>\
	                <div style="padding-bottom: 4px "></div>\
	                 <img class="img" id="img-image-'+ i +'" src="{{asset('img/image.png')}}" />\
	                  <span class="remove_img_preview" id="remove-image" data-id="'+ i +'"></span>\
	                 <div style="padding-bottom: 4px "></div>\
	                 <label class="error" for="error-'+ i +'"></label>\
	            </div>\
	        </div>\
			');
			images.appendTo("#images-list");
		};

	  $("#add-more-image").click(function () {
			call_add_more();
	  });

	  $(document).on('click','#remove-image' , function (e) {
	    var id = $(this).data('id');
	   	var count = $('.images').length;
	    if (count>1) {
	     	$("div#image-" + id).remove();
	    }else{
	     		alert('can\'t delete.');
	    }
	  });
	});

 	function loadFile (event,id) {
    var output = document.getElementById('img-image-'+id);
    output.src = URL.createObjectURL(event.target.files[0]);
    var count = $('.images').length;
    if(count<6){
      $("#add-more-image").trigger('click');
		}
  };

	$('#category_icon').change(function() {
	  $('#icon_view').html($(this).val());
	})

	$(document).ready(function() {
	  $('#icon_view').html( $('#category_icon').val());
	})

	$(document).on('click','#btn-save-new', function(e) {
	 //e.preventDefault();
	})

</script>

@endpush