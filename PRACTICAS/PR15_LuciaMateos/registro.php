<!DOCTYPE html>
<html lang="es">
    <?php
        session_start();
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estilo.css">
    <title>Tienda</title>
</head>
<body>
    <?php
    require('Funciones/funcionesBD.php');
    require('Conexion/conexionBD.php');
    ?>
    <?php
        if (isset($_SESSION['error'])) {
            echo $_SESSION['error'];
        }
        unset($_SESSION['error']);
    ?>
    <header>
        <div class="logo">
            <img src="imagen/logo.png" alt="logo" class="icono_logo">
        </div>
        <div class="botones">
            <i class="fa-solid fa-user"><a href=""></a></i>
            <i class="fa-solid fa-cart-arrow-down"><a href="#"></a></i>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="">Tienda</a></li>
            <li><a href="">Contacto</a></li>
            <li><a href="">Ofertas</a></li>
        </ul>
        <form class="barra">
            <input type="search" name="buscador" placeholder="Buscar" id="buscador">
            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
    </nav>
    <main class="registro">
        <?php
            if (verificar()){
                
            }else{
        
        ?>
        <h1>Mi cuenta</h1>
        <div class="registrarse">
            <h3>Registrarse</h3>
            <form action="./registro.php" method="post">
                <p>
                <label for="idNombre">Nombre de usuario *</label>
                <input type="text" name="nombre" id="nombre"
                value="<?
                    //Mantener el texto introducido en el campo de texto 
                    if (enviado() && !vacio("nombre")) {
                        echo $_REQUEST["nombre"];
                    }
                ?>">
                <?
                    //comprobar que no este vacio y que cumple los requisitos, si lo está pongo un error
                    if (enviado()) {
                        if (vacio("nombre")){
                            ?>
                            <span style="color:brown"> Introduce nombre</span>
                            <?
                        } elseif (!validarNombre()) {
                            ?>
                            <span style="color:brown"> Nombre ya registrado, revise</span>
                            <?
                        }
                    }
                ?>
                </p>
                <p>
                <label for="idContraseña">Contraseña *</label>
                <input type="password" name="contraseña" id="contraseña">
                <?
                    //comprobar que no este vacio y valido, si lo está pongo un error
                    if (enviado()) {
                        if (vacio("password")){
                            ?>
                            <span style="color:brown"> Introduce contraseña</span>
                            <?
                        } elseif (!patronContraseña()) {
                            ?>
                            <span style="color:brown"> Contraseña no válida, revise</span>
                            <?
                        }
                    }
                ?>
                </p>
                <p>
                <label for="idContraseña2">Repite la contraseña *</label>
                <input type="password" name="contraseña2" id="contraseña2">
                <?
                    //comprobar que no este vacio y valido, si lo está pongo un error
                    if (enviado()){
                        if (vacio('contraseña2')) {
                            ?>
                            <span style="color:brown">Introduce la contraseña de nuevo</span>
                            <?           
                        }elseif ($_REQUEST['contraseña']!=$_REQUEST['contraseña2']) {
                            ?>
                            <span style="color:brown"> Introduce de nuevo la contraseña</span>
                            <?                              
                        }
                    }
                ?>
                </p>
                <p>
                <label for="idEmail">Email *</label>
                <input type="email" name="email" id="idEmail"
                value="<?
                    //Mantener el texto introducido en el campo de texto 
                    if (enviado() && !vacio("email")) {
                        echo $_REQUEST["email"];
                    }
                ?>">
                <?
                    //comprobar que no este vacio y valido, si lo está pongo un error
                    if (enviado()) {
                        if (vacio("email")){
                            ?>
                            <span style="color:brown"> Introduce email</span>
                            <?
                        } elseif (!patronEmail()) {
                            ?>
                            <span style="color:brown"> Email no válida, revise</span>
                            <?
                        }
                    }
                ?>
                </p>
                <p>
                <label for="idFecha">Fecha de nacimiento *(aaaa-mm-dd)</label>
                <input type="date" name="fecha" id="fecha"
                value="<?
                    //Mantener el texto introducido en el campo de texto 
                    if (enviado() && !vacio("fecha")) {
                        echo $_REQUEST["fecha"];
                    }
                ?>">
                <?
                    //comprobar que no este vacio, que sea fecha correcta y que sea mayor de edad, si lo está pongo un error
                    if (enviado()) {
                        if (vacio("fecha")){
                            ?>
                            <span style="color:brown"> Introduce fecha</span>
                            <?
                        } elseif (!patronFecha()) {
                            ?>
                            <span style="color:brown"> Fecha no válida, revise</span>
                            <?
                        }
                    }
                ?>
                </p>
                <input type="submit" value="Registrarse" name="enviar" class="boton">
            </form>
        </div>
        <?php
            }
        ?>
    </main>
    <footer>
        <div class="politicas">
            <a href="">Politica de Cookies</a>
            <a href="">Politica de Privacidad</a>
        </div>
    </footer>
</body>
</html>