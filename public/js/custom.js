$(document).ready(function() {
    $('select[name="teacher"]').on('change', function(){
        var teacherId = $(this).val();
        if(teacherId) {
            $.ajax({
                url: '/students/get/'+teacherId,
                type:"GET",
                dataType:"json",
                beforeSend: function(){
                    $('#live_loading').css("visibility", "visible");
                },
                success:function(data) {
                    $('select[name="student"]').empty();
                    $.each(data, function(key, value){
                        $('select[name="student"]').append('<option value="'+ key +'">' + value + '</option>');
                    });
                },
                complete: function(){
                    $('#live_loading').css("visibility", "hidden");
                }
            });
        } else {
            $('select[name="student"]').empty();
        }
    });
});