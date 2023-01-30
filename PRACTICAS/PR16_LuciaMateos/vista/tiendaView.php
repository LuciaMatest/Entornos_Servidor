<div class="container py-3">
    <section class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-xl-3 mb-4 text-center">
        <?
        $array_productos=ProductoDAO::findAll();
        foreach ($array_productos as $key) {
            echo '<article class="col" >';
            echo '<div class="card mb-4">';
            echo '<div class="card-header bg-white">';
            echo '<img src="../imagen/' . $key['imagen_baja'] . '" alt="productos_pelu">';
            echo '</div>';
            echo '<div class="card-body">';
            echo '<h3 class="fw-bold my-1" style="color: #303030;font-size: 25px;">' . $key['nombre'] . '</h3>';
            echo '<p class="precio py-1" style="color: #444;font-size: 20px;"><b>' . $key['precio'] . '€</b></p>';
            echo '<a href="producto.php?cod_producto=' . $key['cod_producto'] . '" class="botonG">Comprar 
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                    </svg></a>';
            echo '</div>';
            echo '</div>';
            echo "</article>";
        }
        ?>
    </section>
</div>