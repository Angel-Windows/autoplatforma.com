function sendFetchRequest($url) {
    fetch($url)
        .then(function (response) {
            if (response.status >= 200 && response.status < 300) {
                return response.json();
            } else {
                throw new Error('Ошибка при выполнении запроса');
            }
        })
        .then(function (data) {
            console.log(data);
        })
        .catch(function (error) {
            console.error(error);
        });
}

sendFetchRequest();
