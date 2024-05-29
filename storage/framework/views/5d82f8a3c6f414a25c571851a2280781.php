<!--Invoca el archivo patron de diseño (layout)-->
 <!--directivas se utiliza el punto para decir que el archivo se encuentra dentro de la carpeta-->

<!--Crear el contenido de titulo para que sea insertado en la estructura "app"-->
<?php $__env->startSection('titulo'); ?>
    Pagina Principal
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
    Bienvenido a contenido
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kf959\OneDrive\Documentos\8 Cuatrimestre\Mario\Laravel\gestion-sw\resources\views/welcome.blade.php ENDPATH**/ ?>