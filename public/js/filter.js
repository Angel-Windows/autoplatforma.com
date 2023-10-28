const auction_status = document.querySelector("#auction_status");
let event = new Event('change', {bubbles: true});
const changeAuctionStatus = (newStatus = null) => {
    if (auction_status) {
        auction_status.value = newStatus;
        const minValue = document.getElementById("min-value");
        minValue.dispatchEvent(event);
    }
}
$(function () {
    $('.filter_car_form').change(function (e) {
        let $form = $(this);
        filter_car_form(e, $form);
    });
});

function filter_car_form(e, $form) {
    let startTime = performance.now(); // Записываем начальное время
    let url = $form.attr('action'); // Получить текущий URL из формы
    let formData = $form.serialize(); // Получить отправленные атрибуты формы
    formData = delete_all_empty_params(formData);
    $.ajax({
        type: $form.attr('method'),
        url: url,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: formData
    }).done(function (data) {
        let newURL = "catalog" + "?" + formData;
        history.pushState({}, "", newURL);
        document.querySelector('.car_card_lis').innerHTML = data;

        let endTime = performance.now(); // Записываем время завершения запроса
        let executionTime = endTime - startTime; // Вычисляем время выполнения запроса
        console.log('Запрос выполнен за ' + executionTime + ' миллисекунд');
    }).fail(function () {
        console.log('fail');
    });
    e.preventDefault();
}

function remove_one_parameter(queryString, param = "page", value = 1) {
    const params = new URLSearchParams(queryString);
    const pageValue = params.get(param);
    console.log(param, pageValue, value)
    if (pageValue == value) {
        params.delete(param);
    }

    return params.toString();
}


function delete_all_empty_params(link) {
    for (let key in noDataFilters) {
        link = remove_one_parameter(link, key, noDataFilters[key]);
    }
    return link;
}


