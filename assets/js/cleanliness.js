let pregunta_card = document.querySelectorAll('.pregunta__card')
let respuestas = document.querySelectorAll('.pregunta__respuesta')
let pregunta_header = document.querySelectorAll('.pregunta__pregunta')
let icon = document.querySelectorAll('.icono__flecha')
console.log("🚀 ~ icon:", icon)

pregunta_card.forEach((element, index) => {
   element.addEventListener('click', () => {
    
       respuestas.forEach(respuesta => {
           respuesta.classList.remove('pregunta_opened');
       });
       respuestas[index].classList.add('pregunta_opened');

       pregunta_header.forEach(header => {
           header.classList.remove('pregunta__header-active');
       });
       pregunta_header[index].classList.add('pregunta__header-active');
       
       icon.forEach(icono => {
           icono.src = 'assets/img/cleanliness/flecha_rojo.png';
        });
        icon[index].src = 'assets/img/cleanliness/flecha_blanco.png';
   });
});