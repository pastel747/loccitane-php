$(document).ready(function(){
    swiperSetting2();
    swiperSetting3();
    swiperSetting4();
    bestSellerClick();
});



function swiperSetting2(){
    // var swiper2 = new Swiper('.name .swiper-container', {
    //     slidesPerView: 3,
    //     navigation: {
    //         nextEl: '.name .swiper-button-next',
    //         prevEl: '.name .swiper-button-prev',
    //       },
    //     pagination: {
    //         el: '.name .swiper-pagination',
    //         clickable: true,
    //       },
    // });
    var swiper3 = new Swiper('.name5 .swiper-container', {
        slidesPerView: 3,
        navigation: {
            nextEl: '.name5 .swiper-button-next',
            prevEl: '.name5 .swiper-button-prev',
          },
        pagination: {
            el: '.name5 .swiper-pagination',
            clickable: true,
          },
    });
    
    
}





function swiperSetting3(){
    var swiper4 = new Swiper('.name6 .swiper-container', {
        slidesPerView: 3,
        navigation: {
            nextEl: '.name6 .swiper-button-next',
            prevEl: '.name6 .swiper-button-prev',
          },
        pagination: {
            el: '.name6 .swiper-pagination',
            clickable: true,
          },
    });
}





function swiperSetting4(){
    var swiper2 = new Swiper('.name7 .swiper-container', {
        slidesPerView: 3,
        navigation: {
            nextEl: '.name7 .swiper-button-next',
            prevEl: '.name7 .swiper-button-prev',
          },
        pagination: {
            el: '.name7 .swiper-pagination',
            clickable: true,
          },
    });
}







function bestSellerClick(){
    $('.bestSeller>div>ul>li a').click(function(e){
        console.log(e);
        e.preventDefault();
    });
    $('.bestSeller>div>ul>li').click(function(){
        // alert('클릭');
        $('.bestSeller>div>ol>li').removeClass('slide_active');
        // $('.bestSeller>div>ol>li').css('display', 'none');
        var testIndex = $(this).index();
        // alert(testIndex);
        $('.bestSeller>div>ol>li').eq(testIndex).addClass('slide_active');
        // alert('test');
        // $('.bestSeller>div>ol>li[testIndex]').css('display', 'block');
    });
}
