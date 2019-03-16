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

//валидация формы
var nameUs = $('[name="name"]');
var emailUs = $('[name="email"]');
var messageUs = $('textarea');

$('form').submit( function (emmet){
    var userName = nameUs.val();
    var userEmail = emailUs.val();
    var userMessage = messageUs.val();
               
    if(userName == '' || userEmail == '' || userMessage == ''){

        if(userName == ''){
            red (nameUs);
            
        }
        if(userEmail == ''){
           red (emailUs);
        }
        if(userMessage == ''){
            red (messageUs);
        }
        return false;
        
    }else{
        $(nameUs, emailUs, messageUs).css('border', '4px solid orange');
        event.preventDefault(); //отключаем стандартную отправку с переходом на php
        $.ajax({
            type: 'POST', // указываем тип get либо post
            url: "/functions/func_array.php", //путь к обработчику формы
            dataType: "text", //тип данных 
            data: $('form').serializeArray(), // возвращает строку с данными введенными в форму 
            success: function(result){
                // console.log(result)
            } 
           
        });
        
        $('.hide-form-block').css('display', 'flex' );
    
        var data = $('form').serializeArray();
        
        $.each(data, function(){
            $('.form-info-block :nth-child(1) :nth-child(2)').append(data[0].value);
            $('.form-info-block :nth-child(2) :nth-child(2)').append(data[1].value);
            $('.form-info-block :nth-child(3) :nth-child(2)').append(data[2].value);
            
        });
       
        //Закрытие блока вывода форму с перезагрузкой странички
        $('.cancel').click(function () {
            $('.hide-form-block').css('display', 'none' );
            // $('form')[0].reset(); //можно очищать форму
            location.reload(); // перезагрузка странички для обновления формы и post запроса. 
                          
        });
    } 
    
});


function red (val){
    $(val).css('border', '4px solid red');
}

//простая проверка на пустное значение.
$('input , textarea').on( 'input', function (){
    var inText = $('input , textarea');
    inText = $(this);
    value = inText.val();
    
    if(value == ''){
        inText.css('border', '4px solid red');
    }
    else{
        inText.css('border', '4px solid orange');
        
    }
 
});

//Функции фокус для плавного трансформирования текста.
$('[type="text"], textarea').focusin( function () {
    $(this).parent().find("div").css({
        'top' : '-9px',
        'left' : '13px',
        'font-size' : '10px',
    });
});

$('[type="text"], textarea').focusout( function () {
    if ($(this).val() == 0) {
        $(this).parent().find("div").removeAttr("style");
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
$('nav a').click( function () {
    $('html, body').animate({
        scrollTop : $( $(this).attr('href') ).offset().top
    },800)
});





