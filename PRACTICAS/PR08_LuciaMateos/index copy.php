<?php
    require("./funcion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../../CSS/estilos.css">
    <title>Document</title>
</head>
<body>
    <div class="caja4">
    <h1>Formulario</h1>
    <?php
        
        if(comprobacion() == true){
            mostrarResultados();
        } else {

    ?>
    <form action="./index.php" method="post" enctype="multipart/form-data">
        <p>
            <label for="idNombre">Nombre</label>    
            <input type="text" name="nombre" id="idNombre" placeholder="nombre" value=
            "<?php
                if(enviado() && !vacio("nombre")){
                    echo $_REQUEST["nombre"];
                }
            ?>"
            >
            <?php
                if(vacio("nombre") && enviado()){
                    ?>
                        <span style="color: red;"><-- Rellene el nombre</span>
                    <?
                }
            ?>
        </p>
        <p>
            <label for="idNombreo">Nombre opcional</label>    
            <input type="text" name="nombreo" id="idNombreo" placeholder="nombre" value="
            <?php
                if(enviado() && !vacio("nombreo")){
                    echo $_REQUEST["nombreo"];
                }
            ?>"
            >
        </p>
        <p>
            <label for="idalnum">alfanumerico</label>    
            <input type="text" name="alnum" id="idalnum" placeholder="alfanumerico" value=
            "<?php
                if(enviado() && !vacio("alnum")){
                    echo $_REQUEST["alnum"];
                }
            ?>"
            >
            <?php
                if(vacio("alnum") && enviado()){
                    ?>
                        <span style="color: red;"><-- Rellene el nombre</span>
                    <?
                }
            ?>
        </p>
        <p>
        <label for="idalnumop">alfanumerico opcional</label>    
            <input type="text" name="alnumop" id="idalnumop" placeholder="alfanumerico" value=
            "<?php
                if(enviado() && !vacio("alnumop")){
                    echo $_REQUEST["alnumop"];
                }
            ?>"
            >
        </P>
        <p>
            <label for="idFecha">Fecha</label>
            <input type="date" name="fecha" id="idFecha" value=
            "<?php
                if(enviado() && !vacio("fecha")){
                    echo $_REQUEST["fecha"];
                }
            ?>"
            >
            <?php
                if(vacio("fecha") && enviado()){
                    ?>
                        <span style="color: red;"><-- Elija una fecha</span>
                    <?
                }
            ?>
        </p>
        <p>
            <label for="idFechao">Fecha opcional</label>
            <input type="date" name="fechao" id="idFechao" value=
            "<?php
                if(enviado() && !vacio("fechao")){
                    echo $_REQUEST["fechao"];
                }
            ?>"
            >    
        </p>
        <p>
        <label for="idRadio1">Opcion1</label>
        <input type="radio" name="radio" id="idRadio1" value="Opcion1" <?php
            if(enviado() && existe("radio") && $_REQUEST["radio"] == "Opcion1")
                echo "checked";
        ?>
        >
        <label for="idRadio2">Opcion2</label>
        <input type="radio" name="radio" id="idRadio2" value="Opcion2" <?php
            if(enviado() && existe("radio") && $_REQUEST["radio"] == "Opcion2")
                echo "checked";
        ?>
        >
        <label for="idRadio3">Opcion3</label>
        <input type="radio" name="radio" id="idRadio3" value="Opcion3" <?php
            if(enviado() && existe("radio") && $_REQUEST["radio"] == "Opcion3")
                echo "checked";
        ?>
        >
        <?php
            if(!existe("radio") && enviado()){
                ?>
                    <span style="color: red;"><-- Elige una opcion</span>
                <?
            }
        ?>
        </p>
        <p>
            <label for="idOpciones">Elige una opcion:</label>
            <select name="opciones" id="idOpciones">
                <option value="0">Seleccione</option>
                <option value="1">Primero</option>
                <option value="2">Segunda</option>
            </select>
            <?php
                if(existe("opciones") && $_REQUEST['opciones']==0){
                    echo"<span style='color: red;'><-- Elige una opcion</span>";
                }
            ?>
        </p>
        <p> Elige al menos 1 y maximo 3:<br>
            <label for="idCheck">check</label>
            <input type="checkbox" name="check[]" id="idCheck" value="check1" <?php
                if(enviado() && existe("check") && in_array("check1", $_REQUEST["check"]))
                    echo "checked";
            ?>
            >
            <label for="idCheck2">check2</label>
            <input type="checkbox" name="check[]" id="idCheck2" value="check2" <?php
                if(enviado() && existe("check") && in_array("check2", $_REQUEST["check"]))
                    echo "checked";
            ?>
            >  
            <label for="idCheck3">check3</label>
            <input type="checkbox" name="check[]" id="idCheck3" value="check3" <?php
                if(enviado() && existe("check") && in_array("check3", $_REQUEST["check"]))
                    echo "checked";
            ?>
            >
            <label for="idCheck4">check4</label>
            <input type="checkbox" name="check[]" id="idCheck4" value="check4" <?php
                if(enviado() && existe("check") && in_array("check4", $_REQUEST["check"]))
                    echo "checked";
            ?>
            >
            <label for="idCheck5">check5</label>
            <input type="checkbox" name="check[]" id="idCheck5" value="check5" <?php
                if(enviado() && existe("check") && in_array("check5", $_REQUEST["check"]))
                    echo "checked";
            ?>
            >
            <label for="idCheck6">check6</label>
            <input type="checkbox" name="check[]" id="idCheck6" value="check6" <?php
                if(enviado() && existe("check") && in_array("check6", $_REQUEST["check"]))
                    echo "checked";
            ?>
            >
            <?php
                if(!existe("check") && enviado()){
                    ?>
                        <span style="color: red;">Elige 1 opcion como minimo</span>
                    <?
                } else if(veces("check")){
                    ?>
                        <span style="color: red;">Elige menos de 3 opciones</span>
                    <?
                }
            ?>            
        <p>
            <label for="idTelefono">Nº Telefono</label>    
            <input type="text" name="telefono" id="idTelefono" placeholder="654987321" value=
            "<?php
                if(enviado() && !vacio("telefono")){
                    echo $_REQUEST["telefono"];
                }
            ?>"
            >
            <?php
                if(enviado()){
                    if(vacio("telefono")){
                        ?>
                            <span style="color: red;"><-- el campo esta vacio, rellenelo</span>
                        <?
                    } else if(isset($_REQUEST["telefono"]) &&!is_numeric($_REQUEST["telefono"])){
                        ?>
                            <span style="color: red;"><-- No es numerico</span>
                        <?
                    } else if(!longitud("telefono")){
                        ?>
                            <span style="color: red;"><-- No se han pasado 9 numeros, el telefono no es valido</span>
                        <?
                    }
                }
                
            ?>
        </p>
        <p>
            <label for="idEmail">Email</label>    
            <input type="email" name="mail" id="idMail" placeholder="mail" value=
            "<?php
                if(enviado() && !vacio("mail")){
                    echo $_REQUEST["mail"];
                }
            ?>"
            >
            <?php
                if(vacio("mail") && enviado()){
                    ?>
                        <span style="color: red;"><-- No has introducido email</span>
                    <?
                }
            ?>
        </p>
        <p>
            <label for="idPass">Contraseña</label>
            <input type="password" name="pass" id="idPass" placeholder="contraseña" value=
            "<?
                if(enviado() && vacio("pass")){
                    echo $_REQUEST["pass"];
                }
            ?>">
            <?php
                if(isset($_REQUEST["pass"])){
                    if(vacio("pass")){
                    ?>
                        <span style="color: red;"><-- Rellene la contraseña</span>
                    <?
                    }
                }
            ?>
        </p>
        <p>
            <input type="file" name="fichero" name="idFichero">
        </p>
        <input type="submit" value="enviar" name="enviar">
    </form>
    <?php
       }
    ?>
    </div>
</body>
</html>