<div class="px-5">
    <h1>Sorteo</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Fecha</th>
                <th scope="col">idUsuario</th>
                <th scope="col">n1</th>
                <th scope="col">n2</th>
                <th scope="col">n3</th>
                <th scope="col">n4</th>
                <th scope="col">n5</th>
            </tr>
        </thead>
        <tbody>
            <?
            $apuestas = ApuestaDAO::findAll();
            foreach ($apuestas as $apuesta) { ?>
                <tr>
                    <td><? echo $apuesta->id ?></td>
                    <td><? echo $apuesta->fecha ?></td>
                    <td><? echo $apuesta->idUser ?></td>
                    <td><? echo $apuesta->n1 ?></td>
                    <td><? echo $apuesta->n2 ?></td>
                    <td><? echo $apuesta->n3 ?></td>
                    <td><? echo $apuesta->n4 ?></td>
                    <td><? echo $apuesta->n5 ?></td>
                </tr>
            <? } ?>
        </tbody>
    </table>

    <form action="./index.html">
        <input type="submit" class="btn btn-dark" name="generar" value="Generar">
    </form>
</div>