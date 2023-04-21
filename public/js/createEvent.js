fetch("/api/sessies/ophalen").then(req => {
    req.json().then(result => {

        const nodes = document.querySelector("#opkomend").children;

        let earliest = result[0];

        const sqlTimeValue = earliest.starting;

        const date = new Date(sqlTimeValue);

        const year = date.getFullYear();
        const month = date.getMonth() + 1;
        const day = date.getDate();
        const hours = date.getHours();
        const minutes = date.getMinutes();
        const seconds = date.getSeconds();

        const readableTime = `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;

        console.log(result)
        nodes[1].innerHTML = earliest.sessienaam;
        nodes[2].innerHTML = '⏰ | ' + readableTime;
        nodes[3].innerHTML = '🧑‍🏫 | ' + earliest.trainer;
    })
})
