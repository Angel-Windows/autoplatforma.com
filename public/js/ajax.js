const csrf_token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
// let JSON = '';
Post = (url, func = () => {
}, parameters = {}) => {
    getResource(url, parameters)
        .then(data => {
            console.log(data)
            // update_card()
            // func(data)
        })
        .catch(error => console.log(error));

    async function getResource(url, parameters) {
        const res = await fetch(url, {
            method: 'POST',
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json, text-plain, */*",
                "X-Requested-With": "XMLHttpRequest",
                "X-CSRF-TOKEN": csrf_token,
            },
            // body: parameters
            body: JSON.stringify(parameters)
        });

        if (!res.ok) {
            throw new Error(`Не удалось получить ${url}, статус: ${res.status}`);
        }
        // return await res;
        return await res.json();
    }
}


const update_card = () => {
    // console.log(JSON)
}

