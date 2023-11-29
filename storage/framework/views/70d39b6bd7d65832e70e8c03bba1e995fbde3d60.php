
<?php $__env->startSection('contenido'); ?>
<div class="row">
                            <?php $__currentLoopData = $especialidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $especialidad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-xl-3 col-md-6">
                                    <!-- card -->
                                    <div class="card card-animate" style="background-color: <?php echo e($especialidad->color); ?>;">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <h5 class="fs-16 text-uppercase fw-bold text-white-50 text-truncate mb-0">
                                                        <?php echo e($especialidad->nombre); ?>

                                                    </h5>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <h5 class="text-white fs-14 mb-0">
                                                        <i class="ri-arrow-right-up-line fs-13 align-middle"></i>
                                                        <?php echo e($especialidad->color); ?>

                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-end justify-content-between mt-4">
                                                <div>
                                                    <h4 class="fs-22 fw-bold ff-secondary text-white mb-4">
                                                        Total fichas: <span class="counter-value" data-target="559.25">8</span>
                                                    </h4>
                          
                                                    <a type="button" class="text-decoration-underline text-white-50" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                                        Ingresar
                                                    </a>
                                                </div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-soft-light rounded fs-3">
                                                        <i class="bx bx-dollar-circle text-white"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div> <!-- end row-->

                     
                       <?php echo $__env->make('especialidades.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 

                        
 <?php $__env->stopSection(); ?>                        
 
<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vistasLaravel\resources\views/especialidades/index.blade.php ENDPATH**/ ?>