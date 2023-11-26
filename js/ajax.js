$(document).ready(function () {
    $('#form').submit(function (event) {
    event.preventDefault();

    const formData = new FormData(this);

    // Отправить данные на сервер и на почту
    sendEmail(formData);
    });

    function sendEmail(formData) {
    const apiUrl = 'form.php'; 

    $.ajax({
        url: apiUrl,
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function (data) {
            console.log('Ответ сервера:', data);
            $('.message').addClass('active')
            $('.modal__close').addClass('modal__massage')
            $('.modal__box').append('<div class="text"></div>')
            $('.text').append("<h2 class='text__title'>Спасибо за заявку</h2>")
            $('.text').append("<p class='text__desc'>Я обязательно свяжусь с вами в&nbsp;ближайшее время</p>")
            $('.text').append('<img class="text__logo" src="img/logo.svg" alt="Logo - Alex Shevtsov">')
        },
        error: function (error) {
            console.error('Ошибка:', error);
        }
    });
    }
});


