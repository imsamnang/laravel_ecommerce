$(document).ready(function(){
		$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});
	// Change Language
	$("#languageSwitcher").change(function(){
		var locale = $(this).val();
		var _token = $("input[name=_token]").val();

		$.ajax({
			url:"/language",
			type: "POST",
			data:{locale:locale, _token:_token},
			dataType:'json',
			success:function(data){

			},
			error:function(data){

			},
			beforeSend:function(){

			},
			complete:function(data){
				window.location.reload(true);
			}
		});
	});

// Initialize
	$('.form-check-input-switch').bootstrapSwitch();
  $(".form-check-input-switch").click(function(){
      if($(".form-check-input-switch").prop("checked") == true){
          $("#parent_other").prop("disabled", false);
      }
      else if($('.form-check-input-switch').prop("checked") == false){
          $("#parent_other").prop("disabled", true)
      }
  });
});