<div class="px-5">
    <h1>Sorteo</h1>
    <table class="table text-center">
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
            foreach ($apuestas as $value) { ?>
                <tr>
                    <td><? echo $value->id ?></td>
                    <td><? echo $value->fecha ?></td>
                    <td><? echo $value->iduser ?></td>
                    <td><? echo $value->n1 ?></td>
                    <td><? echo $value->n2 ?></td>
                    <td><? echo $value->n3 ?></td>
                    <td><? echo $value->n4 ?></td>
                    <td><? echo $value->n5 ?></td>
                </tr>
            <? } ?>
        </tbody>
    </table>

    <form action="./index.php" method="post">
        <!-- Si no se ha realizado el sorteo -->
        <? if ($_SESSION["sorteo"] = false) { ?>
            <input type="submit" class="btn btn-dark" name="generar" value="Generar">
        <? } else { ?>
            <p>Los números premiados son:</p>
            <? foreach ($random_array as $value) { ?>
                <p><? echo $value ?></p>
        <? }
        } ?>
    </form>
</div>