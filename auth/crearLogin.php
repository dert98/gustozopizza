<?php
$archivo = "../sections/navbar.php";
    $archivo = fopen($archivo,"w+b");
        if( $archivo == false ) {
            echo "Error al crear el archivo";
        }
        else
        {
            fwrite($archivo, '<section id="navbar">
            <nav class="navbar navbar-expand-sm f2">
            <div id="logo" class="pull-left">
              <a class="h3 t3" href="http://coronateam.com.ar/index.html#hero">Corona<img src="./img/icon.svg" alt="Corona" height="32" width="36" style="margin: 0 5px 6px 0px;">Team</a>
            </div>
              <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
                aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                  <li class="nav-item"><a class="nav-link h2" href="#home">Home</a></li>
                  <li class="nav-item"><a class="nav-link h2 bl2" href="#services">Services</a></li>
                  <li class="nav-item"><a class="nav-link h2 bl2" href="#about">About</a></li>
                  <li class="nav-item"><a class="nav-link h2 bl2" href="#contact">Contact</a></li>
                  <li class="nav-item"><a class="nav-link h2 bl2" href="sections/login.php">Login</a></li>
                  <?php
                      if (isset($_SESSION["usuario"])) {
                        echo \'<li class="nav-item"><a class="nav-link h2 bl2" href="auth/cerrar.php">Cerrar</a></li>\'; 
                      }
                  ?>
                </ul>
              </div>
            </nav>
          </section>');
            fflush($archivo);
        }
        fclose($archivo);
echo "------>   Actualizado navbar.php creado en /sections/navbar.php";
?>
                  