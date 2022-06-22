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

</head>
<body>
@if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Iniciar Sesion</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif
    <header class="site-header inicio">
        <div class="contenedor contenido-header">
            <div class="barra">
                
                <p class="tv">Tienda Virtual</p>
                

                <nav id="navegacion" class="navegacion">
                    <a href="nosotros.html">Nosotros</a>
                    <a href="productos.html">Productos</a>
                    <a href="blog.html">Blog</a>
                    <a href="contacto.html">Contacto</a>
                </nav>

            </div>
            <h1>Cuero Mercancía A.C</h1>
        </div>
    </header>

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
                <p>Ventas locales, completamente seguras, surtido al por mayor</p>
            </div>
        </div>
    </section>

    <main class="seccion contenedor">
        <h2 class="fw-300 centrar-texto">Productos Destacados</h2>
        <div class="contenedor-anuncios">

            <div class="anuncio">
                <img src="img/productos/anuncio1.jpg" width="1000px" alt="">
                <div class="contenido.anuncio">
                    <h3>Cartera para dama </h3>
                    <p> Hermosas carteras con terminados perfectos y bonitos colores. </p>
                    <p class="precio">$25.000</p>
                    <a href="anuncio.html" class="boton boton-amarillo d-block">Ver producto</a>
                </div>
            </div>
            <div class="anuncio">
                <img src="img/productos/anuncio2.jpg" width="1000px" alt="">
                <div class="contenido.anuncio">
                    <h3>Billetera para caballero </h3>
                    <p>Finas billeteras con acabados bien definidos y perfecto espacio. </p>
                    <p class="precio">$40.000</p>
                    <a href="anuncio.html" class="boton boton-amarillo d-block">Ver producto</a>
                </div>
            </div>
            <div class="anuncio">
                <img src="img/productos/anuncio3.jpg" width="1000px" alt="">
                <div class="contenido.anuncio">
                    <h3>Bolso tres F dama </h3>
                    <p> Bolso para dama de gran capacidad para uso diario, casual y elegente.</p>
                    <p class="precio">$70.000</p>
                    <a href="anuncio.html" class="boton boton-amarillo d-block">Ver producto</a>
                </div>
            </div>
        </div>
        <div class="ver-todas">
            <a href="anuncios.html" class="boton boton-verde">Ver todos los Productos</a>
        </div>
    </main>

    <section class="imagen-contacto">
        <div class="contenedor contenido-contacto" >
            <h2 class="contac">Cuero Mercancía A.C</h2>
            <p class="contac">Toda clase de artículos 100% cuero</p>
            <a href="contacto.html" class="boton boton-amarillo">Contactanos</a>
        </div>  
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