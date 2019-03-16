//функция отображения бургер меню.
var burgerButton = $('.burger-menu');
var toppanel = $('.toppanel');
var secondStick = $('.menu-btn-stick:nth-child(2)');

$(burgerButton).click(function() {

    var attrVal = secondStick.attr('style');
    
    if (attrVal == undefined) {
        secondStick.css('display', 'none');
        toppanel.animate({ 'margin-right' : '0px' }), 500;
    } else {
        secondStick.removeAttr('style');
        toppanel.animate({ 'margin-right' : '-260px' }), 500;
    }
    $('.menu-btn-stick:nth-child(1)').toggleClass('menu-btn-stick-first');
    $('.menu-btn-stick:nth-child(3)').toggleClass('menu-btn-stick-last');
});

//функция удаление атрибута style для корректного отображения топпанели 
var myWindow = $(window);
$(window).resize( function (){
var winWidth = myWindow.width();
if (winWidth > 1000){
    $('.toppanel').removeAttr('style');
    }
});