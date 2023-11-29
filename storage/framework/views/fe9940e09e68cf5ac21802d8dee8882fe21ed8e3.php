

<?php $__env->startSection('contenido'); ?>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <label for="" class="form-label">Ingrese Numero de carnet</label>
                <input class="form-control" type="text" placeholder="Ingresar numero de carnet" >
                <br>
                <a href="<?php echo e(route('especialidades.index')); ?>" class="btn btn-primary">Validar</a>
                <br>
                <br>
                <a href="<?php echo e(route('especialidades.index')); ?>" class="btn btn-success">Ver Especialidades</a>
            </div>
            <div class="col-md-6"></div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vistasLaravel\resources\views/afiliado/index.blade.php ENDPATH**/ ?>