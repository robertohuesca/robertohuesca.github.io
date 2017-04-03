<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contacto - Outlet Seguros</title>
    <meta name="description" content="Obten la mejor asesoría y descubre las increíbles ofertas que en Outlet Seguros tenemos para tí en seguros para autos, seguros de vida o financiar tus estudios">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css">
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto+Slab" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- Google Map -->
    <script>
    function initMap() {
    var myLatLng = {lat: 17.9839115, lng: -92.92395920000001};
    // Create a map object and specify the DOM element for display.
    var map = new google.maps.Map(document.getElementById('map'), {
    center: myLatLng,
    scrollwheel: false,
    zoom: 17
    });
    // Create a marker and set its position.
    var marker = new google.maps.Marker({
    map: map,
    position: myLatLng,
    title: 'Outlet Seguros!'
    });
    }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB3bRe3gHDTCO9vQvrtksakF_JR_OzR228&callback=initMap"
    async defer></script>
  </head>
  <body>
    <div class="nav-services">
      <div class="fixed snavigator nav-black white-text middle-xs" id="resp-nav">
        <div class="row middle-xs center-xs">
          <div class="col-xs-7 col-sm6 white-text medium" id="menu-stick">
            <img id="logo-nav" src="img/logo2.png" alt="Logotipo" width="110px" height="40px" >
            Cumpliendo tus sueños
          </div>
          <div class="col-xs" id="">
            <div class="box">
              <nav class="white-text text-right navi " id="responsive-nav" >
                <i class="glyphicon glyphicon-remove white-text glyphicon glyphicon-menu-hamburger  subtitle " id="menu-open"></i>
                <ul class="list-inline medium navi" id="nav-secu">
                  <li><a class="menu-link" href="index.html">Inicio</a></li>
                  <li><a class="menu-link" href="index.html">Conócenos</a></li>
                  <li><a class="menu-link" href="services.html">Servicios</a></li>
                  <li><a class="menu-link" href="#">Promociones</a></li>
                  <li><a class="menu-link" href="contact.html">Contacto</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section id="global-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="block" >
              <h1>Contáctanos</h1>
              <p >No te preocupes, estamos para ti en cualquier momento, escribenos y no te dejaremos solo.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- contact form start -->
    <section id="contact-form">
      <div class="container">
        <form method="POST" name="contacto" action="php/contacto.php">
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <div class="block">
                <form>
                  <div class="form-group">
                    <input name="nombre" type="text" class="form-control" placeholder="Nombre">
                  </div>
                  <div class="form-group">
                    <input name="email" type="Email" class="form-control" placeholder="Email" >
                  </div>
                  <div class="form-group">
                    <label for="sel1">Departamento:</label>
                    <select class="form-control" id="sel1" name="departamento">
                      <option value="soporte@outletseguros.com.mx">Atención en general</option>
                      <option value="fianzas@outletseguros.com.mx">Fianzas</option>
                      <option value="autos@outletseguros.com.mx">Autos</option>
                      <option value="vidaeinversiones@outletseguros.com.mx">Asesorìa personalizada</option>
                      <option value="vidaeinversiones@outletseguros.com.mx">Siniestros y tràmites</option>
                      <option value="vidaeinversiones@outletseguros.com.mx">Gastos mèdicos</option>
                    </select>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-md-6 col-sm-12">
              <div class="block">
                
                <div class="form-group-2">
                  <textarea name="mensaje" class="form-control" rows="3" placeholder="Tu Mensaje"></textarea>
                </div>
                <button id="contact-btn" class="btn btn-default" type="submit">Enviar Mensaje</button>
                <div class="msg"></div>
              </div>
            </div>
          </div>
        </form>
        <div id="contact-box" class="row">
          <div class="col-md-6 col-sm-12">
            <div class="block">
              <h2>Visítanos</h2>
              <ul class="address-block">
                <li>
                  <i class="fa fa-map-marker"></i> Calle Pedro C. Colorado #112 Villahermosa, Tabasco, 86090
                </li>
                <li>
                  <i class="fa fa-envelope-o"></i>Email: atencionaclientes@outletseguros.com.mx
                </li>
                <li>
                  <i class="fa fa-phone"></i>Teléfono: 01 800 99318574
                </li>
              </ul>
              <ul class="social-icons">
                <li>
                  <a href="#"><i class="fa fa-google"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-facebook"></i></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="block">
              <h2>Nuestra Ubicación</h2>
              <div class="google-map">
                <div id="map"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="sucursales">
      <label class="center-xs"><h2>Sucursales</h2></label>
      <div class="row">
        <div class="col-lg-4 callout">
          <span class="icon icon-stack"></span>
          <h2>Mérida</h2>
          <ul class="address-block">
            <li><i class="fa fa-map-marker"></i>Calle Pedro C. Colorado #112 Villahermosa, Tabasco, 86090</li>
            <li><i class="fa fa-envelope-o"></i>Email: atencionaclientes@outletseguros.com.mx</li>
            <li><i class="fa fa-phone"></i>Teléfono: 01 800 99318574                  </li>
          </ul>
        </div>
        
        <div class="col-lg-4 callout">
          <span class="icon icon-eye"></span>
          <h2>Cd. de México</h2>
          <ul class="address-block">
            <li><i class="fa fa-map-marker"></i>Calle Pedro C. Colorado #112 Villahermosa, Tabasco, 86090</li>
            <li><i class="fa fa-envelope-o"></i>Email: atencionaclientes@outletseguros.com.mx</li>
            <li><i class="fa fa-phone"></i>Teléfono: 01 800 99318574                  </li>
          </ul>
        </div>
        
        <div class="col-lg-4 callout">
          <span class="icon icon-heart"></span>
          <h2>Chiapas</h2>
          <ul class="address-block">
            <li><i class="fa fa-map-marker"></i>Calle Pedro C. Colorado #112 Villahermosa, Tabasco, 86090</li>
            <li><i class="fa fa-envelope-o"></i>Email: atencionaclientes@outletseguros.com.mx</li>
            <li><i class="fa fa-phone"></i>Teléfono: 01 800 99318574                  </li>
          </ul>
        </div>
      </div>
    </section>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="list-inline">
              <li><a href="index.html"><strong>Inicio</strong></a></li>
              <li class="footer-menu-divider">&sdot;</li>
              <li><a href="index.html"><strong>Conócenos</strong></a></li>
              <li class="footer-menu-divider">&sdot;</li>
              <li><a href="services.html"><strong>Servicios</strong></a></li>
              <li class="footer-menu-divider">&sdot;</li>
              <li><a href="#promotions"><strong>Promociones</strong></a></li>
              <li class="footer-menu-divider">&sdot;</li>
              <li><a href="contact.html"><strong>Contacto</strong></a></li>
            </ul>
            <p class="copyright text-muted small"><strong>Copyright &copy; Outlet Seguros 2017. Todos los derechos reservados</strong></p>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
    <!-- Bootstrap -->
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
    <!-- Scripts -->
    <script src="js/main.js"></script>
    <!-- Google Analytics-->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-93487508-1', 'auto');
    ga('send', 'pageview');
    </script>
  </body>
</html>