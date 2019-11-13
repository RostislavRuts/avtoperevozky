//анимированная навигация по сайту////////////////////////////////
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(function()
{
    $("nav").on("click","a", function (event) 
    {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1500);
    });




/*Анимация закрытия меню после нажатия на его кнопки*/
$(document).ready(function() {
  $('#menu-trigger').click(function() {
    $('header nav ul li').slideToggle(500);
  });//end slide toggle
  $('header li').click(function() {
    if($(window).width() < 992 ) {
        $('header nav ul li').slideToggle(500);
    }
  });
  
  $(window).resize(function() {     
        if (  $(window).width() > 992 ) {           
            $('header nav ul li').removeAttr('style');
         }
    });//end resize

  //обработка сообщение с сайта//////////////////////////////////////
  /*$("#submit").click(function()
  {
    $("#erconts").fadeIn(500);
       $.ajax(
       {
          type: "POST",
          url: "send.php", // Адрес обработчика
          data: $("#callbacks").serialize(),
          error:function()
          {
            $("#erconts").html("Произошла ошибка!");
          },
          beforeSend: function() 
          {
              $("#erconts").html("Отправляем данные...");
          },
          success: function(result)
          {
              $("#erconts").html(result);
              checkThis();
          }
      });
      return false;
  });*/
});

// Модальное окно1
// открыть по кнопке
$('.nav-button').click(function() { 
  
  $('.js-overlay-campaign').fadeIn();
  $('.js-overlay-campaign').addClass('disabled');
});
// закрыть на крестик
$('.js-close-campaign').click(function() { 
  $('.js-overlay-campaign').fadeOut();
  
});
// закрыть по клику вне окна
$(document).mouseup(function (e) { 
  var popup = $('.js-popup-campaign');
  if (e.target!=popup[0]&&popup.has(e.target).length === 0){
    $('.js-overlay-campaign').fadeOut();
    
  }
});

// Модальное окно2
// открыть по кнопке
$('.overlaySwitch1').click(function() { 
  
  $('.js-overlay-campaign2').fadeIn();
  $('.js-overlay-campaign2').addClass('disabled');
});
// закрыть на крестик
$('.js-close-campaign2').click(function() { 
  $('.js-overlay-campaign2').fadeOut();
  
});
// закрыть по клику вне окна
$(document).mouseup(function (e) { 
  var popup = $('.js-popup-campaign2');
  if (e.target!=popup[0]&&popup.has(e.target).length === 0){
    $('.js-overlay-campaign2').fadeOut();
    
  }
});

// Модальное окно3
// открыть по кнопке
$('.overlaySwitch2').click(function() { 
  
  $('.js-overlay-campaign3').fadeIn();
  $('.js-overlay-campaign3').addClass('disabled');
});
// закрыть на крестик
$('.js-close-campaign3').click(function() { 
  $('.js-overlay-campaign3').fadeOut();
  
});
// закрыть по клику вне окна
$(document).mouseup(function (e) { 
  var popup = $('.js-popup-campaign3');
  if (e.target!=popup[0]&&popup.has(e.target).length === 0){
    $('.js-overlay-campaign3').fadeOut();
    
  }
});

$('.js-slider-testimonials').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    prevArrow: '.js-testimonials-prev',
    nextArrow: '.js-testimonials-next'
});
$('.js-getModal').magnificPopup({
    type: 'inline',

    fixedContentPos: false,
    fixedBgPos: true,

    overflowY: 'auto',

    closeBtnInside: true,
    preloader: false,

    midClick: true,
    removalDelay: 300,
    mainClass: 'my-mfp-zoom-in'
});






  /*$('#edit-off').click(function(){
    $('#off').summernote({focus: true});
  });

  $('#save-off').click(function(){
   var markup = $('#off').summernote('code');
   saveData('services', markup);
    $('#off').summernote('destroy');
  });

  $('#edit-work').click(function(){
    $('#work').summernote({focus: true});
  });

  $('#save-work').click(function(){
   var markup = $('#work').summernote('code');
   saveData('work', markup);
    $('#work').summernote('destroy');
  });




  function saveData(to, data){
    $.ajax({
      url: '/data-save',
      type: 'POST',
      data:{
        to: to,
        data: data
      },
      success: function(result){
        console.log(result)
      }
    })
  }*/

});