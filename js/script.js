$( document ).ready(function() {
    $(".header_mobile-menu-icon").click(function(){
        $(".header_mobile-menu").toggleClass("hide-mobile");
        $(".mobile-menu-mask").toggleClass("hide");
    });
    $(".header_mobile-close-icon").click(function(){
        $(".header_mobile-menu").addClass("hide-mobile");
        $(".mobile-menu-mask").addClass("hide");
    });
    $(".mobile-menu-mask").click(function(){
        $(".header_mobile-menu").addClass("hide-mobile");
        $(".mobile-menu-mask").addClass("hide");
    });
});