<div class="h-100 container-fluid">
    <div class="h-100 row d-flex align-items-stretch">
        <div class="col-12 col-md-7 col-lg-6 col-xl-5 d-flex align-items-start flex-column px-vw-5">
            <div class="mb-auto col-12">
                <h1>Apuesta</h1>
                <?
                if (isset($_SESSION['error'])) {
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                }
                ?>
                <form class="row" action="./index.php" method="post">
                    <div class="col-12">
                        <div class="form-check">
                            <? for ($i = 1; $i <= 50; $i++) { ?>
                                <input class="oculto" type="checkbox" name="check[]" value="<? echo $i ?>" id="<? echo $i ?>">
                                <label for="<? echo $i ?>">
                                    <? echo $i ?>
                                </label>
                            <? } ?>
                        </div>
                        <input type="submit" class="btn btn-dark" name="insertar" value="Insertar">
                        <input type="submit" class="btn btn-dark" name="modificar" value="Modificar">
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>