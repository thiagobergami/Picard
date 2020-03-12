jQuery(function($){
    $('[data-toggle="popover"]').popover({ trigger: "hover" });

    $('.slide').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        prevArrow: '<button class="slick-prev"><i class="ft-seta_left"></i></button>',
        nextArrow: '<button class="slick-next"><i class="ft-seta_right"></i></button>',
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    dots: true,
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    arrows: false
                }
            },
            {
                breakpoint: 576,
                settings: {
                    dots: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
    
    
});

// $("#cData").datepicker({
//     format: "dd/mm/yyyy",
//     language: "pt-BR",
//     rightArrow: '<i class="ft-seta_right"></i>',
//     daysShort: ["D", "S", "T", "Q", "Q", "S", "S"],
//     daysMin:  ["D", "S", "T", "Q", "Q", "S", "S"],
//     multidate: false,
//     autoclose: true,
//     todayHighlight: true
// });

$(document).ready(function(){
    $('#cData').pickadate({
        format: 'dd/mm/yyyy',
        selectMonths: true,
        selectYears: true,
        editable: true,
        today: '',
        clear: '',
        close: '',
        monthsFull: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
        monthsShort: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
        weekdaysShort: ['D','S', 'T', 'Q', 'Q', 'S', 'S'],
        showMonthsShort: true,
        labelMonthNext: '',
        labelMonthPrev: '',
    });
});