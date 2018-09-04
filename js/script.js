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

        $('.w992 .tad').eq(0).show();
        $('.dop992 .tad4').eq(0).show();
        $('.w992 .sr1.stab').addClass('active');
        $('.w992 .stab').click(function(){
            num = $('.w992 .stab').index(this);
            $('.w992 .tad').hide();
            $('.w992 .tad').eq(num).show();
        });
        $('.dop992 .stab').click(function(){
            num = $('.dop992 .stab').index(this);
            $('.dop992 .tad4').hide();
            $('.dop992 .tad4').eq(num).show();
        });
        $('.s992 ').on("click","div.stab",function(){
            if($(this).hasClass('active')){
                $(this).removeClass('active');
            }else{
                $('.s992 .stab').removeClass('active');
                $(this).addClass('active');
            }
        });
        $('.w992 .stab').click(function(){
            $('.w992 .stab').removeClass('active');
            $(this).addClass('active');
        });
        $('.dop992 .stab').click(function(){
            $('.dop992 .stab').removeClass('active');
            $(this).addClass('active');
        });


    });