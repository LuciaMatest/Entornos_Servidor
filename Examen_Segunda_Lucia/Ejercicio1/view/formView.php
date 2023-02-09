<div class="h-100 container-fluid">
    <div class="h-100 row d-flex align-items-stretch">

        <div class="col-12 col-md-7 col-lg-6 col-xl-5 d-flex align-items-start flex-column px-vw-5">

            <div class="mb-auto col-12">
                <h1>Formulario</h1>

                <form class="row" action="./index.php" method="post">
                    <div class="col-12">
                        <!--NOMBRE-->
                        <div class="mb-3">
                            <label for="user" class="form-label">Usuario</label>
                            <input type="text" class="form-control form-control-lg bg-gray-800 border-dark" id="user" aria-describedby="user" name="user">
                        </div>
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            mensaje de error
                        </div>
                        <!--CONTRASEÑA-->
                        <div class="mb-3">
                            <label for="pass" class="form-label">Contraseña</label>
                            <input type="password" class="form-control form-control-lg bg-gray-800 border-dark" id="pass" name="pass">
                        </div>
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            mensaje de error
                        </div>
                        <!--FECHA-->
                        <div class="mb-3">
                            <label for="fecha" class="form-label">Fecha</label>
                            <input type="text" class="form-control form-control-lg bg-gray-800 border-dark" id="fecha" aria-describedby="fecha" name="fecha">
                        </div>
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            mensaje de error
                        </div>
                        <!--SELECTOR-->
                        <div class="mb-3">
                            <label for="" class="form-label">Selector</label>
                            <select class="form-select form-select-lg" name="" id="">
                                <option selected>Select one</option>
                                <option value="">New Delhi</option>
                                <option value="">Istanbul</option>
                                <option value="">Jakarta</option>
                            </select>
                        </div>
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            mensaje de error
                        </div>
                        
                        <!--SUBMIT-->
                        <input type="submit" class="btn btn-white btn-xl mb-4" name="enviar" value="Inciar sesión">
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>