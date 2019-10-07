<?php include_once 'includes/templates/header.php'; ?>

<section class="seccion contenedor">

    <h2>Calendario de Eventos</h2>

    <?php
    try {
        //code...
        require_once('includes/funciones/bd_conexion.php');
        $sql = 'SELECT * FROM eventos';
        $resultado = $conn->query($sql);
    } catch (\Exception $e) {
        //throw $th;
        echo $e->getMessage();
    }
    ?>

    <div class="calendario">
        <?php
        $eventos = $resultado->fetch_assoc();
        ?>

        <pre>
        <?php var_dump($eventos); ?>
    </pre>

    </div>

    <?php
    $conn->close();
    ?>

</section>
<!-- .seccion -->

<?php include_once 'includes/templates/footer.php'; ?>