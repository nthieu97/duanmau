$(document).ready(function(){
    //owl carousel banner
    $("#banner-area .owl-carousel").owlCarousel({
        dots:true,
        items:1,
        autoplay:true,
        loop: true
    });
    //top-sale-carousel
    $("#top-sale .owl-carousel").owlCarousel({
        loop:true,
        nav:true,
        dots:false,
        responsive:{
            0 :{
                items:1
            },
            600 :{
                items:3
            },
            1000:{
                items:5
            }
            }
    });
    //new-product-owl-carousel
    $("#new-phones .owl-carousel").owlCarousel({
        loop:true,
        dots:true,
        margin:10,
        responsive:{
            0 :{
                items:1
            },
            600 :{
                items:3
            },
            1000:{
                items:5
            }
            }
    });
    //isotope-filter
    var $grid = $(".grid").isotope({
        itemSelector:'.grid-item',
        layoutMode:'fitRows',
        percentPosition: true,
    });
    //filter on button click
    $(".button-group").on("click","button",function(){
        var filterValue =$(this).attr("data-filter");
        $grid.isotope({
            filter:filterValue
        })
    });
    //blog-carousel
    $("#blog .owl-carousel").owlCarousel({
        loop:true,
        dots:true,
        responsive:{
            0 :{
                items:1
            },
            600 :{
                items:3
            }
            }

    });
    //product-qty
    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    // let $input = $(".qty .qty-input");


    //click on button
    $qty_up.click(function(e){
        let $input=$(`.qty-input[data-id='${$(this).data("id")}']`)
        if($input.val()>=1 && $input.val()<=9){
            $input.val(function(i,oldval){
                return ++oldval;
            })
        };
    })
    $qty_down.click(function(e){
        let $input=$(`.qty-input[data-id='${$(this).data("id")}']`)
        if($input.val()>1 && $input.val()<=10){
            $input.val(function(i,oldval){
                return --oldval;
            })
        };
    })
})
