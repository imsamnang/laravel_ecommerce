@extends('layouts.backend.khmer24_layout')

@push('css')
	<link  href="{{asset('assets/css/post.css')}}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="{{asset('css/upload.css')}}">
@endpush

@section('content')

	<div class="container">
		@include('freeads.form')
	</div>
	
@endsection

@push('js')
<script src="{{asset('js/upload.js')}}"></script>

<script type="text/javascript">
	$('document').ready(function(){
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

@endpush