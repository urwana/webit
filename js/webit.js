$(function () {
    /*
    $('.menu li').hover(function () {
        var subMenu = $(this).find('.sub-menu');
        $('.sub-menu').css({ 'display': 'none' });
        subMenu.css({ 'display': 'block' });
    }, function () {
        $('.sub-menu').css({ 'display': 'none' });
        var subMenu = $(this).find('.sub-menu');
        subMenu.hover(function () {
            $(this).css({ 'display': 'block' });
        }, function () {
            $(this).css({ 'display': 'none' });
        });
    });
    */
/*
    $('.menu li').hover(function () {
        $(this).addClass('active');
    }, function () {
        $(this).removeClass('active');
    });

    $('.menu li').mouseenter(function () {
        $('.sub-menu').css({ 'display': 'none' });
        var subMenu = $(this).find('.sub-menu');
        subMenu.css({ 'display': 'block' });
    }).mouseleave(function () {
        var subMenu = $(this).find('.sub-menu');
        if (!$(this).hasClass('active')) {
            subMenu.css({ 'display': 'none' });
        }else{
            subMenu.css({ 'display': 'block' });
        }
    });
*/


    $('.menu li').hover(function(){
        $('.sub-menu:not(:animated)', this).slideDown();
    }, function(){
        $('.sub-menu',this).slideUp();
    });


/*
    $('.menu li').hover(function(){
        $('.sub-menu:not(:hover)', this).css({ 'display': 'block' });
    }, function(){
        $('.sub-menu',this).css({ 'display': 'none' });
    });
*/

});