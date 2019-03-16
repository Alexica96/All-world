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

// Алексей помогите прописать бесконечную прокрутку.
var counter = 0;
var oneSlide = $('.slider-flex-item');
var buttonPrev = $('.slider-button').eq(0);
var buttonNext = $('.slider-button').eq(1);
var slideFlex = $('.slider-flex');
var firstSlide = oneSlide.eq(0).clone();
 
slideFlex.append(firstSlide);

function nextSlide() {
    (counter >= oneSlide) ? counter = 0 : counter++;
    slideFlex.animate({
        'left' : -100 * counter + '%'
    }, 500);
};

function prevSlide() {
    (counter <= oneSlide) ? counter = 0 : counter--;
    slideFlex.animate({
        'left' : -100 * counter + '%'
    }, 500);
};

$('.slider-button').hover( function(){
    $(this).css('background', 'orange');
    },
    function() {
    $(this).css('background', 'none');
});

buttonNext.click(function() {
    nextSlide();
    oneSlide.last().after(oneSlide.first());
});

buttonPrev.click(function() {
    prevSlide();
    oneSlide.first().before(oneSlide.last());
});


//добавление стилей hover для кнопок открытия блока отзвов 
var text = $('.sec5-rev-info'); 
var button = $('.sec5-rev-button');

button.hover( function(){
    $(this).addClass('sec5-rev-button-hover')
    },
    function() {
    $(this).removeClass('sec5-rev-button-hover');
});
    
//условие плавного открытия блока отзывов, при клике на следующий-
//отзыв автоматически закрывается текущий отзыв. 
button.on('click', function () {
    var curentButton = $(this);
    var curentText = curentButton.prev();
        
    if(curentText.is(':visible')) {
        curentText.slideUp();
        button.html('Читать отзыв');
            
    }else{
        text.slideUp();
        button.html('Читать отзыв');
        curentText.slideDown();
        curentButton.html('Скрыть отзыв')
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

//валидация формы
var nameUs = $('[name="name"]');
var emailUs = $('[name="email"]');
var phoneUs = $('[name="phone"]');
var messageUs = $('textarea');

$('form').submit( function (){
    var userName = nameUs.val();
    var userEmail = emailUs.val();
    var userPhone = phoneUs.val();
    var userMessage = messageUs.val(); 
    
    if(userName == '' || userEmail == '' || userPhone == '' || userMessage == ''){

        if(userName == ''){
            red (nameUs);
        }
        if(userEmail == ''){
            red (emailUs);
        }
        if(userPhone == ''){
            red (phoneUs);
        }
        if(userMessage == ''){
            red (messageUs);
        }
        return false;

    }else{
        $(nameUs, emailUs, phoneUs, messageUs).css('border', '4px solid orange');
        $('form').submit();
    }
    
});

function red (val){
    $(val).css('border', '4px solid red');
}

// простая проверка на пустное значение
$('input , textarea').on( 'input', function (){
    var inText = $('input , textarea');
    inText = $(this);
    value = inText.val();
    
    if(value == ''){
        red (inText);
    }
    else{
        inText.css('border', '4px solid orange');
        return false;
    }
  
});
//Функции фокус для плавного трансформирования текста.
$('[type="text"], textarea').focusin( function () {
    $(this).parent().find("div").css({
        'top' : '-14px',
        'left' : '13px',
        'font-size' : '10px',
    });
});

$('[type="text"], textarea').focusout( function () {
    if ($(this).val() == 0) {
        $(this).parent().find("div").removeAttr("style");
    }
});

// функции всплывающего блока cookies, временно повесил закрытие на все кнопки.
$('.cooki-block').animate({
    'margin-left' : '500px'
}, 1500);

$('.cooki-cancel , .cooki-button-yes , .cooki-button-not').click(function() {
    $('.cooki-block').animate({
        'margin-left' : '-500px'
    }, 1500);
});



