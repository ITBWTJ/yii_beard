
// $(document).ready(function() {
// 	$('a[href^="#"]').click(function () {
// 		elementClick = $(this).attr("href");
// 		destination = $(elementClick).offset().top;
// 		if($.browser.safari) {
// 			$('body').animate( { scrollTop: destination }, 2000);
// 		} else {
// 			$('html').animate( { scrollTop: destination }, 2000);
// 		}
// 		return false;
// 	});
	
// });

$(document).ready(function(){
    $(".header").on("click","a", function (event) {
        //отменяем стандартную обработку нажатия по ссылке
        event.preventDefault();
 
        //забираем идентификатор бока с атрибута href
        var id  = $(this).attr('href'),
 
        //узнаем высоту от начала страницы до блока на который ссылается якорь
            top = $(id).offset().top;
         
        //анимируем переход на расстояние - top за 1500 мс
        $('body,html').animate({scrollTop: top}, 1000);
    });
});
