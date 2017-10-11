$(document).ready(function(){

    $('.site-content').fadeIn();

   var $grid = $('.thumbs');
    $grid.isotope({
        itemSelector: '.thumb',
        masonry:{
            gutter:7
        }
    });


    $('.posts-navbar').on( 'click', 'span', function() {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue });
    });

    $(".thumb").hover(function(){
        var x = $(this).find('.thumb-footer');
        x.toggleClass('tall');
    });


});