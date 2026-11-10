<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('titre'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>
    <header>
        <h1>Gestion des matières et des épreuves</h1>
        <nav>
            <button type="button" data-url="<?php echo e(route('matiere')); ?>">Matières</button>
            <button type="button" data-url="<?php echo e(route('epreuve')); ?>">Épreuves</button>
            <button type="button" data-url="<?php echo e(route('matiere.create')); ?>">Ajouter Matieres</button>
            <button type="button" data-url="<?php echo e(route('epreuve.create')); ?>">Ajouter Épreuves</button>
        </nav>
    </header>
    <main>
        <?php echo $__env->yieldContent('contenu'); ?>
    </main>


    <footer>TP N03</footer>

    <script src="<?php echo e(asset('js/navigation.js')); ?>"></script>
</body>
</html>
<?php /**PATH /home/dario/Documents/laravel/tp05/resources/views/t1.blade.php ENDPATH**/ ?>