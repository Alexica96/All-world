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
$(window).resize(function (){
var winWidth = myWindow.width();
if (winWidth > 1000){
    $('.toppanel').removeAttr('style');
    }
});

// функция hover для изменения цвета стлелки внутри блока, при наведении мыши 
var arrowBlock = $('.arrow-up-block');
var arrow = $('.arrow-up')

arrowBlock.hover( function () {
    arrow.addClass('arrow-up-hover')
    }, function () {
    arrow.removeClass('arrow-up-hover')
});

//функция скролла вверх по клику на блок со стелкой
arrowBlock.click( function () {
    $('html, body').animate ({
        scrollTop : 0
    }, 800)
}); 

// функция скрола для кнопок навигации
$('nav a').click(function () {
    $('html, body').animate({
        scrollTop : $( $(this).attr('href') ).offset().top
    },800)
});





