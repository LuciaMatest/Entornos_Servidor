<?php
    require('../Funciones/funcionesBD.php');
    require('../Funciones/BD.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../CSS/estilo.css">
    <title>Perfil</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="../imagen/logo.png" alt="logo" class="icono_logo">
        </div>
        <div class="botones">
        <?php
            session_start();
            if (estaValidado()) {
                echo '<a href="carrito.php"><i class="fa-solid fa-cart-arrow-down"></i>Carrito</a>';
                echo '<a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i>Logout</a>';
            } else {
        ?>
            <a href="login.php"><i class="fa-solid fa-user"></i>Iniciar Sesión</a>
        <?php
            }
        ?>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="../index.php">Inicio</a></li>
            <li><a href="productos.php">Tienda</a></li>
            <li><a href="#">Contacto</a></li>
            <li><a href="#">Ofertas</a></li>
            <?php
            if (esAdmin() || esModerador()) {
                echo '<li><a href="#">Almacen</a></li>';
                echo '<li><a href="#">Ventas</a></li>';
            }
            ?>
        </ul>
    </nav>
    <main class="registro">
        <?php
            if (verificar()){
                actualizarUsuario();
                session_destroy();
                session_start();
            }else{
        
        ?>
        <h1>Mi perfil</h1>
        <div class="perfil">
            <form action="./perfil.php" method="post">
                <p>
                <label for="idUser">Nombre de usuario *</label>
                <input type="text" name="user" id="user"
                value="<?
                    //Mantener el texto introducido en el campo de texto 
                    if (enviado() && !vacio("user")) {
                        echo $_REQUEST["user"];
                    }
                ?>">
                <?
                    //comprobar que no este vacio y que cumple los requisitos, si lo está pongo un error
                    if (enviado()) {
                        if (vacio("user")){
                            ?>
                            <span style="color:brown"> Introduce usuario</span>
                            <?
                        } elseif (!validarUsuario()) {
                            ?>
                            <span style="color:brown"> Usuario ya registrado, revise</span>
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
                <label for="idNombre">Nombre *</label>
                <input type="text" name="nombre" id="idNombre"
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
                <label for="idFecha">Fecha de nacimiento *</label>
                <input type="text" name="fecha" id="fecha" placeholder="dd/mm/aaaa"
                value="<?
                    //Mantener el texto introducido en el campo de texto 
                    if (enviado() && !vacio("fecha")) {
                        echo $_REQUEST["fecha"];
                    }
                ?>">
                <?
                    //comprobar que no este vacio, que sea fecha correcta y si lo está pongo un error
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
                <p>
                    <label for="idOpcion">Rol:</label>
                    <select name="rol" id="idOpcion">
                        <option value="0">Seleccione una opción</option>
                        <option value="ADM01">Administrador</option>
                        <option value="M0001">Moderador</option>
                        <option value="U0001">Usuario normal</option>
                    </select>
                    <?php
                        //Comprobar si existe
                        if(existe('rol') && $_REQUEST['rol']==0){
                            ?>
                            <span style="color:brown"> Introduce un rol</span>
                            <?
                        }
                    ?>
                </p>
                <input type="submit" value="Guardar cambios" name="enviar" class="boton">
                <!-- <a href="login.php">Volver</a> -->
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