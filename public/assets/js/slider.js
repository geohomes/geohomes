$(function(){

   $('.loop').on('init', function(e, slick) {
        var $firstAnimatingElements = $('div.item:first-child').find('[data-animation]');
        doAnimations($firstAnimatingElements);
    });
    $('.loop').on('beforeChange', function(e, slick, currentSlide, nextSlide) {
        var $animatingElements = $('div.item[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
        doAnimations($animatingElements);
    });

    $('.loop').slick({
        dots: false,
        infinite: true,
        speed: 700,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 20000,
        fade: true,
        slidesToShow: 1,
        slidesToScroll: 1
    });
    
    $(".slider-left").on("click",function(){
        $('.testimonial-slider').slick('slickPrev');
    });
    $(".slider-right").on("click",function(){
        $('.testimonial-slider').slick('slickNext');
    });

    $('.testimonial-slider').slick({
        dots: true,
        infinite: true,
        speed: 750,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 8000,
        fade: false,
        slidesToShow: 1,
        slidesToScroll: 1
    });

    function doAnimations(elements) {
        var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        elements.each(function() {
            var $this = $(this);
            var $animationDelay = $this.data('delay');
            var $animationType = 'animated ' + $this.data('animation');
            $this.css({
                'animation-delay': $animationDelay,
                '-webkit-animation-delay': $animationDelay
            });
            $this.addClass($animationType).one(animationEndEvents, function() {
                $this.removeClass($animationType);
            });
        });
    }
});
