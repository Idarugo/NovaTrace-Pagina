<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./styles/style.css">
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="./js/cambiarModo.js"></script>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>NovaTrace</title>
    </head>

    <body>
    <div class="contenedor">
            <header>
                <div id="subheader">
                    <div id="logotipo">
                        <p><a href="index.html">NovaTrace</a></p>
                    </div>
                    <nav>
                        <ul>
                            
                            <li><a href="index.php">Inicio</a></li>
                            <li><a href="quiensomos.php">Quienes Somos</a></li>
                            <li><a href="servicios.php">Servicios</a></li>
                            <li><a href="covid.php">Covid</a></li>
                            <li><a href="contacto.php">Contacto</a></li>
                            <li><a href="login.php">Iniciar Sesion</a></li>

                            <div class="toggle-container">
                                <button class="theme-btn light" onclick="setTheme('light')" title="Light mode">
                                  <img src="https://assets.codepen.io/210284/sun.png" alt="sun">
                                </button>
                                <button class="theme-btn dark" onclick="setTheme('dark')" title="Dark mode">
                                  <img src="https://assets.codepen.io/210284/moon.png" alt="moon">
                                </button>
                              </div>
                        </ul>
                    </nav>
                </div>
            </header>
    </div>

    <section id="wrap">
        <section id="main">
            <section id="slideshow">
                <div  class="banner"> </div>
            </section>
        
             <section id="bienvenidos">
                <article>
                    <hgroup>
                        <h3>Bienvenidos a Nuestro Sitio Web</h3>
                    </hgroup>
                    <p>
                    <ul>
                        <li>Un servicio que ayuda a ahorrar tiempo a los clientes mediante de nuestra plataforma digital.</li>
                    </ul>
                    </p>
                </article>
            </section>
        </section>
     </section>
     
     
     
     <footer>
        <div class="copyright" style="background-color:  #0887b9;">

            <nav>
            <ul class="detalleindex">
            <a href="privacidad.php">Privacidad</a>
            <a href="">|</a>
            <a href="misionyvision.php">Mision Y Vision</a>
            </ul>
            </nav>

            <br/>

            <div class="container-fluid" style="background-color:  #0887b9; color: #bbdefb;">
                ?? TODOS LOS DERECHOS RESERVADOS: 
            </div>

            <div class="container-fluid" style="background-color:  #0887b9; color: #bbdefb;">
                NovaTrace.
            </div>
        </div>
        </footer>
 

    </body>
</html>