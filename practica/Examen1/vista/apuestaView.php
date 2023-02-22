<div class="h-100 container-fluid">
    <div class="h-100 row d-flex align-items-stretch">
        <div class="col-12 col-md-7 col-lg-6 col-xl-5 d-flex align-items-start flex-column px-vw-5">
            <div class="mb-auto col-12">
                <h1>Apuesta</h1>
                <?
                // Si realiza la apuesta aparece el mensaje
                if (isset($_SESSION['acierto'])) {
                    echo $_SESSION['acierto'];
                    unset($_SESSION['acierto']);
                } else if (isset($_SESSION['modificado'])) {
                    //Recogemos los errores que puedan ocurrir
                    echo $_SESSION['modificado'];
                    unset($_SESSION['modificado']);
                } else if (isset($_SESSION['error'])) {
                    //Recogemos los errores que puedan ocurrir
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                }
                ?>
                <form class="row" action="./index.php" method="post">
                    <div class="col-12">
                        <div class="form-check">
                            <!-- Mostramos todos los numeros del 1 al 50 -->
                            <? for ($i = 1; $i < 51; $i++) { ?>
                                <!-- Si se han seleccionado los numeros se quedan marcados-->
                                <input class="oculto" type="checkbox" name="check[]" value="<? echo $i ?>" id="<? echo $i ?>" <? if (isset($apuesta)) {
                                                                                                                                    if (in_array($i, $arrayCheck)) {
                                                                                                                                        echo "checked";
                                                                                                                                    }
                                                                                                                                } ?>>
                                <!-- Si se ha realizado el sorteo poner los numeros en rojo -->
                                <label for="<? echo $i ?>" class="<? if (isset($sorteo)) {
                                                                        if (in_array($i, $arraySorteo)) {
                                                                            echo "rojo";
                                                                        }
                                                                    } ?>">
                                    <? echo $i ?>
                                </label>
                            <? } ?>
                        </div>
                        <!-- Si no se han seleccionado todos los numeros -->
                        <? if (!sorteo() && !isset($arrayCheck)) { ?>
                            <input type="submit" class="btn btn-dark" name="insertar" value="Insertar">
                        <? } else { ?>
                            <input type="submit" class="btn btn-dark" name="modificar" value="Modificar">
                        <? } ?>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>