<?php $titre = 'Mon Blog'; ?>

<?php ob_start() ?>
    <p>Une erreur est survenue : </p>
<?php $content = ob_get_clean(); ?>

<?php require __DIR__ . './../template/templateError.php'; ?>