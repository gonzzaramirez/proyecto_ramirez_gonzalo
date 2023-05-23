<?php $titulo = "Corritech"; ?>

<?php require('ingresado/header.php') ?>
<section>
    <h1>Bienvenido(a)
        <?php echo $session->get('nombre'); ?>!
    </h1>
    <form method="post" action="<?php echo base_url('logout'); ?>">
        <input type="submit" value="Cerrar sesión">
    </form>
</section>

<?php require('footer.php') ?>