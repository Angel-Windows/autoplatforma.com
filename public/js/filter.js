const auction_status = document.querySelector("#auction_status");
var event = new Event('change', {bubbles: true});
const changeAuctionStatus = (newStatus = null)=>{
    if (auction_status){
        auction_status.value = newStatus;
        const minValue = document.getElementById("min-value");
        minValue.dispatchEvent(event);
    }
}
$(function () {
    $('.filter_car_form').change(function (e) {
        var $form = $(this);
        filter_car_form(e, $form);
    });
});

function filter_car_form(e, $form) {
    var startTime = performance.now(); // Записываем начальное время
    var url = $form.attr('action'); // Получить текущий URL из формы
    var formData = $form.serialize(); // Получить отправленные атрибуты формы
    $.ajax({
        type: $form.attr('method'),
        url: url,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: formData
    }).done(function (data) {
        var newURL = "catalog" + "?" + formData;
        history.pushState({}, "", newURL);
        document.querySelector('.car_card_lis').innerHTML = data;

        var endTime = performance.now(); // Записываем время завершения запроса
        var executionTime = endTime - startTime; // Вычисляем время выполнения запроса
        console.log('Запрос выполнен за ' + executionTime + ' миллисекунд');
    }).fail(function () {
        console.log('fail');
    });
    e.preventDefault();
}
