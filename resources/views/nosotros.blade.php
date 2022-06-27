<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuero AC</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/normalize.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


</head>
<body>
<header class="site-header">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/">
                    <p class="tv">Tienda Virtual</p>
                </a>
                <div class="mobile-menu">
                    <a href="#navegacion">
                        <img src="img/menu.png" alt="Icono menu">
                    </a>
                </div>
                <nav id="navegacion" class="navegacion">
                <a href="productos">Productos</a>
                    <a href="/nosotros">Nosotros</a>
                    <!-- <a href="blog.html">Blog</a> -->
                    <a href="contacto.html">Contacto</a>
                    @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <!-- <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a> -->
                        <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Iniciar Sesion</a>

                        <!-- @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registrarse</a>
                        @endif -->
                    @endauth
                </div>
            @endif
                </nav>
            </div>
        </div>
    </header>

    <main class="contenedor">
        <h1 class="fw-300 centrar-texto" >Conoce sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <img src="img/nosotros.jpg" height="610px" alt="">
            </div>
            <div class="texto-nosotros">
                <blockquote>25 Años de Experiencia</blockquote>
            
            <p>
                Cuero Mercancía A.C, es una un tipo de Tienda virtual, 
                con puntos de ventas presenciales en Manizales y La Cruz Nariño; 
                todos estos productos son exportados de varias empresas belenitas situada en el 
                municipio de Belén al norte del Departamento de Nariño en el suroccidente Colombiano;
                Estas microempresas se dedican a la fabricación y comercialización 
                de artículos y accesorios en cuero a nivel internacional. Los productos que ofrecemos es de calidad 
                tipo aportación, cumpliendo rigurosamente estándares de calidad en su materia prima, 
                herrajes y proceso productivo. Nuestro productos se focalizan para cualquier tipo de clientes
                y para clientes mayoristas a un costo realmente competitivo.
            </p>
           
            </div>
        </div>

    </main>

    <section class="contenedor seccion">
        <h2 class="fw-300 centrar-texto">Mas sobre nosotros</h2>
        <section class="contenedor seccion">
            <!-- <h2 class="fw-300 centrar-texto">Mas Sobre Nosotros</h2> -->
            <div class="iconos-nosotros">
                <div class="icono">
                    <img src="img/medalla.png" width="50px" alt="">
                    <h3>Info</h3>
                    <p>Cuero Mercancía A.C es una microempresa dedicada a vender todo tipo de artículos hechos con cuero, con terminados impecables y a excelentes precios.</p>
                </div>
                <div class="icono">
                    <img src="img/entrega.png" width="50px" alt="">
                    <h3>Envíos</h3>
                    <p>Realizamos envíos a nivel nacional de todos y cada uno de nuestros artículos, garantizando la entraga en los tiempos oportunos.</p>
                </div>
                <div class="icono">
                    <img src="img/marcador-de-posicion.png" width="50px" alt="">
                    <h3>Local</h3>
                    <p>Ventas locales en Manizales y La Cruz Nariño, completamente seguras, surtido al por mayor</p>
                </div>
            </div>
        </section>
        
           
        
    </section>

    <footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <p class="copyright">Aplicativo Web realizado por Adrian Ledezma estudiante de pregrado de la Universidad Nacional de Colombia.</p>
            </nav>
            <p class="copyright">Todos los derechos reservados 2022 &copy;</p>
        </div>
    </footer>
 
  
</body>
</html>