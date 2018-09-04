    $(document).ready(function(){

        $('.la1').click(function() {
            $('.stuk').addClass('fi');
        });
        $('.dugru').on('click',function() {
            $('.stuk').removeClass('fi');
        });

        if ($(window).scrollTop()>=150 ){
            $('#hitr2').show();
        }
        $(window).on('scroll resize', function() {
            if ($(window).scrollTop()>=100){
                $('#hitr2').show();
            }else{
                $('#hitr2').hide();
            }
            if ($(window).scrollTop()>=70){
                $('.top').addClass('dili');
            }
            if($(window).scrollTop()<2){
                $('.top').removeClass('dili');
            }
        });

$('.btn.btn-danger').click(function(event) {
event.preventDefault();
       if( $('.checks').is(':checked')){
        alert('vkl');
       }else{
                alert('vikl');
       }
});

    });