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
        <? foreach ($sorteo as $valor) { ?>
            <tr>
                <th scope='col'><? echo $valor->id ?></th>
                <td><? echo $valor->fecha ?></td>
                <td><? echo $valor->descripcion ?></td>
                <td><? echo $valor->n1 ?></td>
                <td><? echo $valor->n2 ?></td>
                <td><? echo $valor->n3 ?></td>
                <td><? echo $valor->n4 ?></td>
                <td><? echo $valor->n5 ?></td>
            </tr>
        <? } ?>
    </tbody>
</table>