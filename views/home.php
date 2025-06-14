<!DOCTYPE html>
   <html lang="es">
   <head>
      <!-- Meta Tags para la página Home de GR Mariño -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="title" content="GR Mariño - Obras Civiles, Remodelaciones y Soluciones Integrales">
      <meta name="description" content="GR Mariño es tu aliado en obras civiles, remodelaciones, pintura, jardinería y más. Con más de 10 años de experiencia, garantizamos calidad y cumplimiento en cada proyecto. Contáctanos para transformar tus espacios.">
      <meta name="keywords" content="GR Mariño, obras civiles, remodelaciones, pintura, jardinería, redes eléctricas, aseo, proyectos de construcción, Meta, Villavicencio, Colombia">
      <meta name="author" content="GR Mariño">
      <meta name="robots" content="index, follow">

      <!-- Open Graph / Facebook -->
      <meta property="og:type" content="website">
      <meta property="og:url" content="https://www.grmariño.com/">
      <meta property="og:title" content="GR Mariño - Obras Civiles, Remodelaciones y Soluciones Integrales">
      <meta property="og:description" content="Descubre nuestros servicios en construcción, remodelaciones y mantenimiento. Más de 80 proyectos exitosos nos avalan.">
      <meta property="og:image" content="https://www.grmariño.com/img/banner-home.jpg">

      <!-- Twitter -->
      <meta property="twitter:card" content="summary_large_image">
      <meta property="twitter:url" content="https://www.grmariño.com/">
      <meta property="twitter:title" content="GR Mariño - Obras Civiles, Remodelaciones y Soluciones Integrales">
      <meta property="twitter:description" content="Transformamos tus ideas en proyectos. Obras civiles, remodelaciones, pintura, jardinería y más.">
      <meta property="twitter:image" content="https://www.grmariño.com/assets/img/home/banner1.png">

      <!--=============== REMIXICONS ===============-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">

      <!-- =====BOX ICONS===== -->
      <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

      <!--=============== FAVICON ===============-->
        <!-- Favicon estándar para navegadores -->
        <link rel="icon" type="image/png" sizes="32x32" href="assets/icons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/icons/favicon-16x16.png">

        <!-- Color de la barra de direcciones en móviles -->
        <meta name="theme-color" content="#ffffff">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="assets/css/reglas.css">
      <link rel="stylesheet" href="assets/css/nav.css">
      <link rel="stylesheet" href="assets/css/home.css">
      <link rel="stylesheet" href="assets/css/footer.css">

      <title>Soluciones Integrales Mariño | Construcciones y más </title>
   </head>
   <body>
      <!--==================== HEADER ====================-->
      
      <?php include ("shared/header.php") ?>
      
      <!--==================== MAIN ====================-->
      <main class="main">

         <!--==================== HOME ====================-->
         <section class="home" id="home">
            <div class="home_bg">
               

               <div class="home__info">
                    <h1 class="home__title">Expertos en Obras Civiles, Remodelaciones y Servicios Integrales en Colombia y Estados Unidos</h1>
                    <h3 class="home__subtitle">Expertos en remodelaciones y obras civiles con más de 12 años de experiencia en Colombia y Tampa. Calidad, cumplimiento y soluciones integrales que transforman tus espacios.</h3>
                    <div class="home__botones">
                        <a class="bnt__primary" href="contacto">Cotiza tu Proyecto</a> 
                    </div>
               </div>

               <div class="home__aside">
                  <div class="home__social">
                        <a target="_blank" href="https://www.facebook.com/profile.php?id=100063769551722" class="home__icon"><i class='bx bxl-facebook' ></i></a>
                        <a target="_blank" href="https://www.instagram.com/" class="home__icon"><i class='bx bxl-instagram' ></i></a>
                        <a target="_blank" href="https://www.youtube.com/" class="home__icon"><i class='bx bxl-youtube' ></i></a>
                  </div>
               </div>

            </div>
         </section>
         
         <!--==================== ABOUT ====================-->
         <section class="about section" id="about">
            <div class="container">
                <h2 class="section__title">Sobre Nosotros</h2>
               <div class="contenedor__about bg_grid">

                  <div class="about__info">
                    <h3 class="section__sudtitle about__subtitle">Nuestra Empresa Gr Mariño</h3>
                    <p class="parrafo__section">En Soluciones Integrales Mariño nos especializamos en obras civiles, remodelaciones, pintura, electricidad y trabajos en alturas. Con presencia en Villavicencio, Colombia y Tampa, Florida, llevamos más de 12 años construyendo con compromiso y calidad.</p>
                    <p class="parrafo__section">Nos caracteriza la puntualidad, la atención personalizada y la excelencia en cada detalle. Crecemos cruzando fronteras, adaptándonos a nuevas estrategias y tecnologías del sector. Porque la excelencia no se improvisa, se construye.</p>
                  </div>

                  <div class="about__info">
                    <h3 class="section__sudtitle about__subtitle">Nuestras Especializaciones:</h3>
                    <ul class="about__list">
                        <li class="about__itemList">Remodelaciones</li>
                        <li class="about__itemList">Pintura Y Terminados</li>
                        <li class="about__itemList">Trabajos en Alturas</li>
                        <li class="about__itemList">Construcciones</li>
                    </ul>
                    <div class="about__botones">
                        <div class="about__boton">
                           <div class="about__circle">12</div>
                           <p>Años De Experiencia</p>
                        </div>
                        <div class="about__boton">
                           <div class="about__circle">+109</div>
                           <p>Proyectos Completados</p>
                        </div>
                        <div class="about__boton">
                           <div class="about__circle">2</div>
                           <p>Pases En Operación</p>
                        </div>
                    </div>
                  </div>

                  <div class="about__info">
                     <img class="about__image" src="assets/img/home/about_uno.jpg" alt="">
                     <img class="about__image" src="assets/img/home/about_dos.jpg" alt="">
                  </div>


               </div>

            </div>
         </section>
         
         <!--==================== PROYECTOS ====================-->
         <section class="proyectos section" id="proyectos">

            <div class="container proyectos__content">
               <h2 class="proyectos__title">Proyectos</h2>
               <div class="contenedor__proyectos bg_grid">

                  <div class="proyectos__card">
                     <div class="card__img">
                        <img src="assets/img/home/proyecto1.png" alt="imagen reprentativa de aseo liviano y aseo grueso">
                     </div>
                     <div class="card__title">
                        <h4 class="proyecto__titleCard">Remodelación Cocina</h4>
                     </div>
                  </div>

                  <div class="proyectos__card">
                     <div class="card__img">
                        <img src="assets/img/home/proyecto2.png" alt="imagen reprentativa de aseo liviano y aseo grueso">
                     </div>
                     <div class="card__title">
                        <h4 class="proyecto__titleCard">Remodelación Cocina</h4>
                     </div>
                  </div>

                  <div class="proyectos__card">
                     <div class="card__img">
                        <img src="assets/img/home/proyecto3.png" alt="imagen reprentativa de aseo liviano y aseo grueso">
                     </div>
                     <div class="card__title">
                        <h4 class="proyecto__titleCard">Remodelación Cocina</h4>
                     </div>
                  </div>

                  <div class="proyectos__card">
                     <div class="card__img">
                        <img src="assets/img/home/proyecto4.png" alt="imagen reprentativa de aseo liviano y aseo grueso">
                     </div>
                     <div class="card__title">
                        <h4 class="proyecto__titleCard">Remodelación Cocina</h4>
                     </div>
               </div>
            </div>

         </section>

         <!--==================== SERVICIOS ====================-->
         <section class="servicios section" id="servicios">
               <h2 class="">Nuestros Servicios</h2>
               <div class="container">
                  <div class="servicios__info bg_grid">

                     <a href="remodelaciones">
                        <div class="servicios_card">
                           <div class="servicios_img">
                              <img src="assets/img/home/service_uno.png" alt="representacion de servicios">
                           </div>
                           <h3 class="servicios_desc">Remodelaciones</h3>
                        </div>
                     </a>

                     <a href="pintura">
                        <div class="servicios_card">
                           <div class="servicios_img">
                              <img src="assets/img/home/service_dos.png" alt="representacion de servicios">
                           </div>
                           <h3 class="servicios_desc">Pintura</h3>
                        </div>
                     </a>

                     <a href="trabajo-en-alturas">
                        <div class="servicios_card">
                           <div class="servicios_img">
                              <img src="assets/img/home/service_tres.png" alt="representacion de servicios">
                           </div>
                           <h3 class="servicios_desc">Trabajo en alturas</h3>
                        </div>
                     </a>

                     <a href="interiores">
                        <div class="servicios_card">
                           <div class="servicios_img">
                              <img src="assets/img/home/service_four.png" alt="representacion de servicios">
                           </div>
                           <h3 class="servicios_desc">Interiores</h3>
                        </div>
                     </a>

                     <a href="aseo">
                        <div class="servicios_card">
                           <div class="servicios_img">
                              <img src="assets/img/home/service_five.png" alt="representacion de servicios">
                           </div>
                           <h3 class="servicios_desc">Aseo grueso y fino</h3>
                        </div>
                     </a>

                     <a href="enchapes">
                        <div class="servicios_card">
                           <div class="servicios_img">
                              <img src="assets/img/home/service_six.png" alt="representacion de servicios">
                           </div>
                           <h3 class="servicios_desc">Enchapes</h3>
                        </div>
                     </a>

                     <a href="trabajos-en-alturas">
                        <div class="servicios_card">
                           <div class="servicios_img">
                              <img src="assets/img/home/service_seven.png" alt="representacion de servicios">
                           </div>
                           <h3 class="servicios_desc">Redes eléctricas</h3>
                        </div>
                     </a>

                     <a href="construcciones">
                        <div class="servicios_card">
                           <div class="servicios_img">
                              <img src="assets/img/home/service_ocho.png" alt="representacion de servicios">
                           </div>
                           <h3 class="servicios_desc">Construcciones</h3>
                        </div>
                     </a>
                  </div>
               </div>


         </section>

         <!--==================== LIDERES ====================-->
         <section class="lideres section" id="lideres">
            <div class="container">

               <div class="contenedor__lideres bg_grid">
                     <div class="lideres__info"> 
                        <h2>Somos Lideres en el sector</h2>
                        <p>En Soluciones Integrales Mariño somos líderes en el sector gracias a nuestra trayectoria, compromiso y resultados comprobables. Durante más de 12 años, hemos ejecutado con éxito proyectos de obras civiles, remodelaciones, pintura, electricidad y más, cumpliendo con altos estándares de calidad y seguridad. </p>
                        <br>
                        <p>Nuestra capacidad de adaptación, atención personalizada y cumplimiento en tiempos de entrega nos ha posicionado como una empresa confiable y preferida por nuestros clientes tanto en Colombia como en Estados Unidos.</p>
                        <div class="container__boton">
                           <a class="bnt__primary" href="contacto">Conocenos</a> 
                        </div>
                     </div>
                     <div class="lideres__img">
                        <img src="assets/img/home/lideres.png">
                     </div>
               </div>
            </div>
         </section>

         <!--==================== CALL ACTION ====================-->
         <section class="callAcion section" id="callAcion">
            <!-- <div class="container"> -->

               <div class="contenedor__callAction">
                  <div class="callLeft">
                     <div class="callLeft__info">
                        <h3 class="callTitle">Comprometidos con la calidad y eficiencia</h3>
                        <p class="callParrafo">Cada proyecto que asumimos refleja nuestro compromiso con la excelencia y el cumplimiento.</p>
                        <p class="callParrafo">Trabajamos con materiales de primera y un equipo altamente capacitado.</p>
                        <p class="callParrafo">La calidad no es una opción, es nuestro estándar en cada obra.</p>
                        <div class="container__boton">
                           <a class="bnt__primary" href="contacto">Iniciar Tu Proyecto</a> 
                        </div>
                     </div>

                  </div>
                  <div class="callRight">
                     <div class="callRight__info">
                        <h3 class="callTitle">Tu proyecto merece estar en manos expertas</h3>
                        <p class="callParrafo">En Soluciones Integrales Mariño estamos listos para llevar tus ideas a la realidad con calidad, puntualidad y confianza.</p>
                        <p class="callParrafo">No importa el tamaño del reto, tenemos la experiencia y el equipo para superarlo.</p>
                        <p class="callParrafo">¡Contáctanos hoy y da el primer paso hacia una obra bien hecha!, Construyamos juntos con excelencia y compromiso.</p>
                     </div>
                  </div>
               </div>
            <!-- </div> -->
         </section>


      <!--==================== METODOLOGIA ====================-->
      <section class="metodologia section" id="metodologia">
         <div class="container">
            <h2>Nuestra Metodología</h2>
               <div class="contenedor__metodologia bg_grid">

                  <div class="metodologia__card">
                     <div class="metodologia__img">
                        <img src="assets/icons/handshake.png" alt="">
                     </div>
                     <h3 class="metodologia__title">Consulta Preliminar</h3>
                  </div>

                  <div class="metodologia__card">
                     <div class="metodologia__img">
                        <img src="assets/icons/gear.png" alt="">
                     </div>
                     <h3 class="metodologia__title">Concepto y Desarrollo</h3>
                  </div>

                  <div class="metodologia__card">
                     <div class="metodologia__img">
                        <img src="assets/icons/receipt.png" alt="">
                     </div>
                     <h3 class="metodologia__title">Regulaciones y elementos de construcción</h3>
                  </div>

                  <div class="metodologia__card">
                     <div class="metodologia__img">
                        <img src="assets/icons/layout.png" alt="">
                     </div>
                     <h3 class="metodologia__title">Ejecución del Proyecto</h3>
                  </div>

                  <div class="metodologia__card">
                     <div class="metodologia__img">
                        <img src="assets/icons/house_door.png" alt="">
                     </div>
                     <h3 class="metodologia__title">Tu Idea Hecha Realidad</h3>
                  </div>
                  
               </div>
         </div>
      </section>

      <!--==================== PREGUNTAS FRECUENTES ====================-->

      <section class="preguntas section" id="preguntasS">
         <div class="container">
            <h2>Nuestras Preguntas Frecuentes</h2>
               <div class="contenedor__preguntas bg_grid">

                  <div class="container__preguntas bg_grid" id="preguntas">

                     <div class="preguntas__card">
                        <h3 class="preguntas__title">¿Qué servicios ofrecen?</h3>
                     </div>

                     <div class="preguntas__card">
                        <h3 class="preguntas__title">¿Trabajan en Colombia y en Estados Unidos?</h3>
                     </div>

                     <div class="preguntas__card">
                        <h3 class="preguntas__title">¿Cómo puedo solicitar una cotización?</h3>
                     </div>

                     <div class="preguntas__card">
                        <h3 class="preguntas__title">¿Cuánto tiempo tardan en entregar un proyecto?</h3>
                     </div>

                  </div>

                  <div class="preguntas__card container__respuestas">
                     <p id="respuesta">Ofrecemos soluciones integrales en obras civiles, remodelaciones, pintura, trabajos en alturas, electricidad residencial, aseo liviano y pesado, con personal calificado y equipos adecuados para cada necesidad.</p>
                  </div>
                  
               </div>
         </div>
      </section>

      <!--==================== TESTIMONIAL ====================-->
      <section class="testimonial section" id="testimonial">
         <div class="container">
            <div class="contenedor__testimonial bg_grid">

               <div class="testimonial__info">
                  <h2>Lo que dicen nuestros clientes</h2>
                  <p>Gracias a Dios primeramente, y a nuestro compromiso constante por mejorar como empresa, hoy nuestros clientes expresan su satisfacción al ver sus proyectos hechos realidad. Sus palabras reflejan la confianza, calidad y cumplimiento que entregamos en cada obra.</p>
               </div>
               
               <div class="testimonial__img testimonial__mainImg">
                  <img src="assets/img/home/testimonial.png" alt="">
               </div>

            </div>
            <div class="testimonial__contentCards bg_grid">

                  <div class="testimonial__card">
                     <p>Contratamos a Soluciones Integrales Mariño y nos sorprendieron gratamente, cumplieron con cada detalle y el resultado fue excelente, sin duda los volveremos a contactar para próximos proyectos.</p>
                     <div class="testimonial__avatar">
                        <div class="testimonial__img" >
                           <img src="assets/img/home/avatar1.png" alt="cliente de Soluciones Integrales Mariño">
                        </div>
                        <div class="avata__info">
                           <p><strong>Chris Macdaniels</strong></p>
                           <div class="avatar__text">
                              <span><img class="span__img" src="assets/icons/X.png" alt="logo de la red social X de elom"></span>
                              <span>@chris_45</span>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="testimonial__card">
                     <p>Nos recomendaron esta agencia y estamos completamente contentos por el trabajo que han hencho, nos han dejado resultados satisfactorios, los tendrémos en cuenta para sus servicios presentados.</p>
                     <div class="testimonial__avatar">
                        <div class="testimonial__img" >
                           <img src="assets/img/home/avatar2.png" alt="cliente de Soluciones Integrales Mariño">
                        </div>
                        <div class="avata__info">
                           <p><strong>Hugo Ricot</strong></p>
                           <div class="avatar__text">
                              <span><img class="span__img" src="assets/icons/X.png" alt="logo de la red social X de elom"></span>
                              <span>@hugo37ricot</span>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="testimonial__card">
                     <p>El equipo de Soluciones Integrales Mariño demostró profesionalismo y eficiencia en todo momento, estamos muy satisfechos con su trabajo y no dudaremos en recomendarlos a otros.</p>
                     <div class="testimonial__avatar">
                        <div class="testimonial__img" >
                           <img src="assets/img/home/avatar3.png" alt="cliente de Soluciones Integrales Mariño">
                        </div>
                        <div class="avata__info">
                           <p><strong>Carla Lorez</strong></p>
                           <div class="avatar__text">
                              <span><img class="span__img" src="assets/icons/X.png" alt="logo de la red social X de elom"></span>
                              <span>@carla4567</span>
                           </div>
                        </div>
                     </div>
                  </div>

            </div>
         </div>
      </section>

      <!--==================== CONTACTO ====================-->
      <section class="contacto " id="contacto">
         <div class="container contacto__contenedor">
            <p>Estas Listo?</p>
            <h2 class="contacto__title">Contáctanos</h2>
            <div class="boton__container">
               <a class="boton__contacto" href="https://wa.me/573123004891?text=Hola%2C%20quisiera%20más%20información" target="_blank" rel="noopener noreferrer">
                  <img class="boton__img" src="assets/icons/Arrow Right.png" alt="icono de flecha hacia la derecha">
               </a>
            </div>
         </div>
      </section>

      </main>

      <!--==================== FOOTER ====================-->
      <?php include ("shared/footer.php") ?>

      
      <!--=============== MAIN JS ===============-->
      <script src="assets/js/home.js"></script>
      <script src="assets/js/helpers.js"></script>
   </body>
</html>