<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Viajes</title>
  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div class="menu-btn">
    <i class="fas fa-bars fa-2x"></i>
  </div>

  <div class="container">
    <!-- Navigation -->
    <nav class="nav-main">
      <!-- Brand -->
      <img src="img/brand.png" alt="TechNews Logo" class="nav-brand">
      <!-- Left Nav -->
      <ul class="nav-menu">
        <li>
          <a href="#Inicio">Inicio</a>
        </li>
        <li>
          <a href="#Servicios">Destinos</a>
        </li>
        <li>
          <a href="#Precios">Precios</a>
        </li>
        <li>
          <a href="#Base">Base de datos</a>
        </li>
      </ul>

      <!-- Right Nav -->
      <ul class="nav-menu-right">
        <li>
          <a href="#">
            <i class="fas fa-search"></i>
          </a>
        </li>
      </ul>
    </nav>
    <hr>

    <!-- SHOWCASE -->
    <a name="Inicio"></a>
    <header class="showcase">
      <h2>BIENVENIDOS A LA PAGINA WEB TOUR DE VIAJES</h2>
      <p>Aqui te mostraremos  algunos destinos a los que puedes viajar para disfrutar y relajarte en ellos.</p>
      <a href="#" class="btn">
        Go <i class="fas fa-chevron-right"></i>
      </a>
    </header>

    <!-- NEWS CARDS -->
    <a name="Servicios"></a>
    <div class="news-cards">
      <div>
        <img src="img/TOUR1.jpg" alt="" />
        <h3>Montañita.</h3>
        <p>Toma su nombre por estar ubicada en una ensenada rodeada por cerros y vegetación al pie del mar
          como un valle con una playa extensa, actualmente es un balneario turístico internacional visitado por jóvenes que practican el turismo de aventura
        </p>
        <a href="https://www.infomontanita.com/es/informacion/">Diversion <i class="fas fa-angle-double-right"></i></a>
      </div>
      <div>
        <img src="img/tour2.jpg" alt="" />
        <h3>Las Islas Galápagos.</h3>
        <p>Es uno de los principales atractivos turísticos del Ecuador que muestras sus entrañas para mostrar su fascinante evolución de flora y fauna
          en un entorno semejante a un espectacular paraíso y laboratorio viviente que fue visitado en 1835 por el científico inglés Charles Darwin
        </p>
        <a href="https://www.ecogal.aero/galapagos">Turismo <i class="fas fa-angle-double-right"></i></a>
      </div>
      <div>
        <img src="img/tour3.jpg" alt="" />
        <h3>Baños de Agua Santa.</h3>
        <p>Ubicado en la provincia de Tungurahua, es uno de los destinos turísticos más hermosos y visitados del Ecuador.
          En este mágico lugar los turistas pueden contemplar a la majestuosa naturaleza y disfrutar de la adrenalina al practicar actividades de aventura.
        </p>
        <a href="https://www.turismo.gob.ec/banos-un-carismatico-y-tranquilo-lugar-al-pie-de-un-volcan/">Cultura <i class="fas fa-angle-double-right"></i></a>
      </div>
      <div>
        <img src="img/tour4.jpg" alt="" />
        <h3>Loja.</h3>
        <p>Un lugar representativo de la ciudad de la cultura.Una de los lugares más visitados de loja por la devoción a la Virgen del Cisne
          La ciudad de la cultura y la música, te invita a descubrir todo su encanto y los idílicos paisajes que la rodean.
        </p>
        <a href="https://www.goraymi.com/es-ec/loja/loja/ciudades/loja-turismo-ad99cc2c3">Tradicion <i class="fas fa-angle-double-right"></i></a>
      </div>
    </div>

    <!-- Card Banner 1-->
    <a name="Precios"></a>
    <section class="cards-banner-one">
      <div class="content">
        <h2>Agencia</h2>
        <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="style.cs">
          <title>Document</title>
      <script>
      function calcular_coste(){
          var num_noches =document.getElementById("n_noches").value;
          var destino = document.getElementById("ciudad_destino").value;
          var carrro = document.getElementById("carro_alquiler").value;
          
          var resultado1 =coste_hotel (num_noches);
          var resultado2 =coste_avion(destino);
          var resultado3 =autos_alquiler(carrro);
          var resultado_total = resultado1+resultado2+resultado3;
          document.getElementById("result").value =resultado_total;
      }
      function coste_hotel(n){
          var coste_estancia= n*140;
          return coste_estancia;
      }
      function coste_avion(ciudad){
      if (ciudad == "Baños"){
          return 0;
      }else if (ciudad == "Galápagos"){
          return 400;
      }else if (ciudad == "Loja"){
          return 200;
      }else if (ciudad == "Montañita"){
          return 200;
      }
      }
      
      function autos_alquiler(carro){
       if (carro == "bmw"){
           return 50;
       }else if (carro == "ferrary"){
           return 100;
       }else if (carro == "lamborghini"){
           return 200;
       }else if (carro == "bugatti"){
       return 150;
       }else if (carro == "no"){
           return 0;
       }
      }
      
      
      </script>
      
      <form action="#">
          <Fieldset>
      <label for="n_noches">Numero de noches</label>
      <input type="text" id="n_noches">
      <label for="ciudad_destino">Seleccione el destino</label>
      <select id="ciudad_destino">
      
      <option value="Baños">Baños</option>
      <option value="Galápagos">Galápagos</option>
      <option value="Loja">Loja</option>
      <option value="Montañita">Montañita</option>
      <br>  
      
      </select>
      <label for="carro_alquiler">Seleccione el auto</label>
      <select id="carro_alquiler">
      <option value="bmw">Bmw</option>
      <option value="ferrary">Ferrary</option>
      <option value="lamborghini">Lamborghini</option>
      <option value="bugatti">Bugatti</option>
      <option value="no">No disponible</option>
      </select>
      
      <input type="button" onclick="calcular_coste()" value="Enviar">
      <label for="result">Costo final del viaje</label>
      <input type="text" id="result" >
      </Fieldset>
      </form>
      </head>
      <body>
          <h1>Precios Viaje</h1>
          <table>
          <tr>
              <th>Costo por noches </th>
              <th>Costo del viaje en avion</th>
              <th>Costo de alquiler de auto </th>
          </tr>
          <tr>
              <td>140$</td>
              <td>No disponible a Baños en Avion</td>
              <td>BMW 50$</td>
          </tr>
          <tr>
              <td>140$</td>
              <td>Galápagos 400$</td>
              <td>Ferrary 100$</td>
          </tr>
          <tr>
              <td>140$</td>
              <td>Loja 200$</td>
              <td>Lamborghini 200$</td>
          </tr>
          <tr>
              <td>140$</td>
              <td>Montañita 100$</td>
              <td>Bugatti 200$</td>
          </tr>

      
          </table>
      </body>
        <!-- lorem 20 -->
        <p>OJO EL COSTO DE LA NOCHE INCLUYE EL PRECIO DEL VIAJE POR AVION.</p>
      </div>
    </section>

    <!-- NEWS CARDS -->
    <div class="news-cards">
      <div>
        <img src="img/m1.jpg" alt="" />
       
        <a href="#">Learn More <i class="fas fa-angle-double-right"></i></a>
      </div>
      <div>
        <img src="img/g2.jpg" alt="" />
        
        <a href="#">Learn More <i class="fas fa-angle-double-right"></i></a>
      </div>
      <div>
        <img src="img/b5.jpg" alt="" />
        
        <a href="#">Learn More <i class="fas fa-angle-double-right"></i></a>
      </div>
      <div>
        <img src="img/l3.jpg" alt="" />
        
        <a href="#">Learn More <i class="fas fa-angle-double-right"></i></a>
      </div>
    </div>

    <!-- third card -->
    <a name="Base"></a>
    <section class="cards-banner-two">
      <div class="content">
        <h2>INGRESO DE DATOS VIAJE.</h2>
        <!-- lorem 30 -->
        <p>Registrese en este apartado con sus datos personales.
          Da click en enlaze externo para registrarte.
        </p>
        <a href="index.php" class="btn">Enlaze externo <i class="fas fa-chevron-right"></i></a>
      </div>
    </section>

    <!-- Follow -->
    <section class="social">
      <p>Follow Viajes</p>
      <div class="links">
        <a href="https://facebook.com">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://twitter.com">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="https://linkdin.com">
          <i class="fab fa-linkedin"></i>
        </a>
      </div>
    </section>
  </div>



  <!-- Footer -->
  <footer class="footer">
    <h3>Viajes Copyright</h3>
  </footer>

  <!-- Scroll Reveal -->
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="main.js"></script>
</body>

</html>