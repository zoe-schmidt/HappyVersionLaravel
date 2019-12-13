<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/fontawesome/css/all.css">
  <link rel="stylesheet" href="/css/header.css">
  <link rel="stylesheet" href="/css/footer.css">
  <title>home</title>
</head>
  <body>
    <header>

      <div class="logo">
        <a href="/"><img src="imagenes/logo_happy_final.png" alt="imagenes"></a>
      </div>


      <div class="categoriasDeProductos">
        <ul class=listaDeProductosLaptop>
            <li><a href="/gastronomia">Gastronomía</a></li>
            <li><a href="/actividades">Actividades</a></li>
            <li><a href="/viajes">Viajes</a></li>
        </ul>
      </div>

      <!--header en mobile-->

      <div class="hamburguesa">
          <i class="fas fa-bars"></i>

      </div>

      <div class="login-compras">
        <div class="usuario">
        <ul>
          @guest
            <a href="/register"><i class="fas fa-sign-in-alt"></i></a>
            <a href="/login"><i class="fas fa-user"></i></a>

        @else
          <a href="/profile"><i class="fas fa-user"></i></a>
          <a href="/logout"  onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i></a></li>
        @endguest
        </ul>

        </div>
      </div>

      <div class="carrito">
          <a href="/carrito"> <i class="fas fa-shopping-cart"></i></a>

      </div>

       <!--HEADER EN ESCRITORIO-->


      <div class="login-escritorio">
        <ul>
        @guest
          <li><a class ="link" href="/login">Login</a></li>
          <li><a class= "link"href="/register">Registrarse</a></li>
        @else
          <li><a class="link" href="/logout" onclick="event.preventDefault();document.getElementById('logout-form').submit();">cerrar sesión</a></li>
          <li><a class="link" href="/profile"> Mi Perfil</a></li>
        @endguest
        </ul>
      </div>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>
</header>

 <section class="menu-mobile">
  <ul class="lista-mobile">
      <li><a href="/gastronomia">Gastronomía</a></li>
      <li><a href="/actividades">Actividades</a></li>
      <li><a href="/viajes">Viajes</a></li>
  </ul>
</section>




    @yield("main")


  <footer class="pie">

    <div class="footer-faq">
      <a href="/faq">Preguntas frecuentes</a>
    </div>
    <div class="contacto">
      <p><a href="/contacto">Contacto</a></p>
    </div>

      </div>
 </footer>
</body>
</html>
