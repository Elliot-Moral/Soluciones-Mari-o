/*=============== SHOW MENU ===============*/
const navMenu = document.getElementById('nav-menu'),
      navToggle = document.getElementById('nav-toggle'),
      navClose = document.getElementById('nav-close')

/* Menu show */
navToggle.addEventListener('click', () =>{
   navMenu.classList.add('show-menu')
})

/* Menu hidden */
navClose.addEventListener('click', () =>{
   navMenu.classList.remove('show-menu')
})

//preguntas frecuentes
const preguntas = document.querySelectorAll('.preguntas__card');
const respuesta = document.getElementById('respuesta');
preguntas.forEach((pregunta, index) => {
    pregunta.addEventListener('click', () => {
      if(index== 0){
        respuesta.textContent = "Ofrecemos soluciones integrales en obras civiles, remodelaciones, pintura, trabajos en alturas, electricidad residencial, aseo liviano y pesado, con personal calificado y equipos adecuados para cada necesidad";  
      }else if(index == 1){
        respuesta.textContent = "Sí. Tenemos presencia en Villavicencio, Colombia, y actualmente brindamos nuestros servicios también en Tampa, Florida, garantizando la misma calidad y compromiso en ambos países.";  
      }else if(index == 2){
        respuesta.textContent = "Puedes comunicarte con nosotros a través del formulario de contacto, WhatsApp o llamada directa. Analizamos tu necesidad y te entregamos una cotización clara, rápida y sin compromiso.";  
      }else if(index == 3){
        respuesta.textContent = "Cada proyecto tiene tiempos distintos según su complejidad, pero siempre trabajamos bajo cronogramas realistas y cumplimos con los plazos pactados. La puntualidad es uno de nuestros mayores valores.";    
      }

    });
});