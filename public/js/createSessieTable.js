function parseDatetime(input) {
    const date = new Date(input);

    const year = date.getFullYear();
    const month = date.getMonth() + 1;
    const day = date.getDate();
    const hours = date.getHours();
    const minutes = date.getMinutes();
    const seconds = date.getSeconds();

    return `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;

}


fetch("/api/sessies/ophalen").then(req => {
    req.json().then(result => {

        const parent = document.querySelector("#tableparent");

        result.forEach(element => {
            let row = document.createElement("tr");

            let naam = document.createElement("td");
            let tijd = document.createElement("td");
            let trainer = document.createElement("td");
            let plekken = document.createElement("td");
            let deelnemen = document.createElement("td");

            deelnemen.append(document.createElement("a"))

            deelnemen.children[0].innerHTML = "Deelnemen"

            naam.innerHTML = element.sessienaam;
            tijd.innerHTML = parseDatetime(element.starting);
            trainer.innerHTML = element.trainer;
            plekken.innerHTML = element.limiet_deelnemers;

            deelnemen.addEventListener("click", (e) => {
               fetch('/api/sessies/joinen', {
                   method:"POST",
                   body: JSON.stringify({
                       naam: element.sessienaam,
                       gebruikersid: 1
                   })
               })
            });

            [naam, tijd, trainer, plekken, deelnemen].forEach(el => {
                row.append(el)
            })

            parent.append(row)
        })

    })

})
