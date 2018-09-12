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

// korzina четные
      $(".nadcharks:even").css("background-color", "#eeeeee");
            $('.clear-input').click(function(){
                $(this).prev().find('input').val('0');
            });

// =======================================================================================================================
// korzina характеристики
        $('.nadcharks, .raspord-h').click(function(){
            $(this).next().toggleClass('vision');
            $(this).toggleClass('vision_active');
        });
            $( ".dop-check" ).click(function(event) {
               // return false;
             event.stopPropagation();
             // Do something
            });

     //   $('.vscrit').click(function(){
     //       $(this).parent().next().toggleClass('vision');
     //       $(this).parent().toggleClass('vision_active');
     //   });
// =======================================================================================================================
// samovivoz form
        $('.samovivoz').click(function() {
                  //      alert('vikl');
               if( $('#male').is(':checked')){
                 $('.samo').show();
                 $('.hide-group').hide();
               }
        });
        $('.gidost').click(function() {
               if( $('#female').is(':checked')){
                 $('.samo').hide();
                 $('.hide-group').css('display', 'flex');
               }
        });


// =======================================================================================================================
// INPUT PLUS MINUS
            $('.minus').click(function () {
                //alert('fghj');
                var $input = $(this).parent().find('input');
                var count = parseInt($input.val()) - 1;
                count = count < 1 ? 1 : count;
                $input.val(count);
                $input.change();
                return false;
            });
            $('.plus').click(function () {
                var $input = $(this).parent().find('input');
                $input.val(parseInt($input.val()) + 1);
                $input.change();
                return false;
            });
// =======================================================================================================================
// показ фильтра

        $('.pokaz-par-end').hide();
        $('.filtr_1200, .filtr_320').click(function () {
                //alert('fghj');
            $(this).hide();
            $('.pokaz-par-end').show();
        });
        $('.filtr_1200_otkr .doppar,.filtr_320_otkr .doppar').click(function () {
           $('.pokaz-par-begin').show();
            $('.filtr_1200_otkr,.filtr_320_otkr').hide();
        });
// =======================================================================================================================
// показ фильтра в 320

$(function(){
    if ($(window).width() < 1092){
        // Подключаем стиль для мобильных
        $('.filtr_1200_otkr').remove();
    }
});
            $( function() {
                $( "#slider-range" ).slider({
                  range: true,
                  min: 0,
                  max: 100000,
                  values: [ 10000, 50000 ],
                  slide: function( event, ui ) {
                    $( "#amount1" ).val(ui.values[ 0 ]);
                    $( "#amount2" ).val(ui.values[ 1 ]);
                  }
                });
                $( "#amount1" ).val($( "#slider-range" ).slider( "values", 0 ));
                $( "#amount2" ).val($( "#slider-range" ).slider( "values", 1 ));
            });
            $( function() {
                $( "#slider-range4" ).slider({
                  range: true,
                  min: 0,
                  max: 1000,
                  values: [ 100, 500 ],
                  slide: function( event, ui ) {
                    $( "#amount3" ).val(ui.values[ 0 ]);
                    $( "#amount4" ).val(ui.values[ 1 ]);
                  }
                });
                $( "#amount3" ).val($( "#slider-range4" ).slider( "values", 0 ));
                $( "#amount4" ).val($( "#slider-range4" ).slider( "values", 1 ));
            });
            $( function() {
                $( "#dlina-obshaya" ).slider({
                  range: true,
                  min: 0,
                  max: 1000,
                  values: [ 100, 500 ],
                  slide: function( event, ui ) {
                    $( "#dlina-obshaya1" ).val(ui.values[ 0 ]);
                    $( "#dlina-obshaya2" ).val(ui.values[ 1 ]);
                  }
                });
                $( "#dlina-obshaya1" ).val($( "#dlina-obshaya" ).slider( "values", 0 ));
                $( "#dlina-obshaya2" ).val($( "#dlina-obshaya" ).slider( "values", 1 ));
            });
            $( function() {
                $( "#dlina-rej-chasti" ).slider({
                  range: true,
                  min: 0,
                  max: 1000,
                  values: [ 100, 500 ],
                  slide: function( event, ui ) {
                    $( "#dlina-rej-chasti1" ).val(ui.values[ 0 ]);
                    $( "#dlina-rej-chasti2" ).val(ui.values[ 1 ]);
                  }
                });
                $( "#dlina-rej-chasti1" ).val($( "#dlina-rej-chasti" ).slider( "values", 0 ));
                $( "#dlina-rej-chasti2" ).val($( "#dlina-rej-chasti" ).slider( "values", 1 ));
            });
    });