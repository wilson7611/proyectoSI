@extends('admin.index')

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Validar Afiliado</h4>
                <div class="flex-shrink-0">
                    <div class="form-check form-switch form-switch-right form-switch-md">
                        <label for="FormValidationDefault" class="form-label text-muted">Show Code</label>
                        <input class="form-check-input code-switcher" type="checkbox" id="FormValidationDefault">
                    </div>
                </div>
            </div><!-- end card header -->

            <div class="card-body">
                {{-- <p class="text-muted">Not interested in custom validation feedback messages or writing JavaScript to change form behaviors? All good, you can use the browser defaults. Try submitting the form below. Depending on your browser and OS, you’ll see a slightly different style of feedback.While these feedback styles cannot be styled with CSS, you can still customize the feedback text through JavaScript.</p> --}}

                <div class="live-preview">
                    <br>
                    <form class="row g-3" action="{{route('especialidades.index')}}">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <label for="validationDefault01" class="form-label">Cedula de Identidad</label>
                            <input type="text" class="form-control" id="validationDefault01" placeholder="Ingrese su numero de cedula de identidad" required>
                        </div>
                    
                        <div class="col-md-3 d-flex align-items-end"> <!-- Utilizamos flexbox para alinear verticalmente -->
                            <button class="btn btn-success me-2" type="submit">Validar</button> <!-- me-2 agrega un pequeño margen derecho -->
                        </div>
                    </form>
                    
                </div>
            </div>
            <div class="card-footer">

            </div>
        </div>
    </div>
</div>
@endsection
