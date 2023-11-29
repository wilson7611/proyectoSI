@extends('admin.index')
@section('contenido')
<div class="row">
                            @foreach ($especialidades as $especialidad)
                                <div class="col-xl-3 col-md-6">
                                    <!-- card -->
                                    <div class="card card-animate" style="background-color: {{ $especialidad->color }};">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <h5 class="text-uppercase fw-bold text-white-50 text-truncate mb-0">
                                                        {{ $especialidad->nombre }}
                                                    </h5>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <h5 class="text-white fs-14 mb-0">
                                                        <i class="ri-arrow-right-up-line fs-13 align-middle"></i>
                                                        {{ $especialidad->color }}
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-end justify-content-between mt-4">
                                                <div>
                                                    <h4 class="fs-22 fw-bold ff-secondary text-white mb-4">
                                                        Total fichas: <span class="counter-value" data-target="559.25">8</span>
                                                    </h4>
                                                    <a href="{{route('principal.index')}}" class="text-decoration-underline text-white-50">Ingresar</a>
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
                            @endforeach
                        </div> <!-- end row-->
                        

                        
 @endsection                        
 