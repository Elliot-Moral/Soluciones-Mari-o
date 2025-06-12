
let contactUrl = 'https://www.xn--grmario-9za.com/api/contacto.php'
    contactUrl = 'http://localhost/grmari%c3%b1o/api/contacto.php'
    
let formUI = document.getElementById('formulario');
let btnFomr = document.getElementById('btn__form');


btnFomr.addEventListener('click', (e) => {
    e.preventDefault()

    const dataForm = new FormData(formUI);

    // console.log(dataForm)

    fetch(contactUrl, {
        method: "POST",
        body: dataForm,
    })
        .then((res) => res.json())
        .catch((error) => console.error("Error:", error))
        .then((response) => () => {
            alert(response)
        });
})

