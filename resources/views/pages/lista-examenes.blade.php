@extends('master')

@section('content')

<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Lista de examenes</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page">Lista de examenes</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->


<div class="row">
    <div class="col-md-6  col-xl-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Examen de prueba 1</h3>

                <div class="card-options"> <a href="javascript:void(0)" class="btn btn-primary btn-sm">Categoria II</a> <a href="javascript:void(0)" class="btn btn-secondary btn-sm ms-2">Certificación</a> </div>
            </div>
            {{-- <div class="card-alert alert alert-warning mb-0"> Adding action was successful </div> --}}
            <div class="card-body"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum </div>
            <a href="{{ route('examen') }}" class="btn btn-primary">Presentar</a>
        </div>
    </div>

    <div class="col-md-6  col-xl-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Examen de prueba 2</h3>

                <div class="card-options"> <a href="javascript:void(0)" class="btn btn-primary btn-sm">Categoria II</a> <a href="javascript:void(0)" class="btn btn-secondary btn-sm ms-2">Certificación</a> </div>
            </div>
            {{-- <div class="card-alert alert alert-warning mb-0"> Adding action was successful </div> --}}
            <div class="card-body"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum </div>
            <button disabled href="javascript:void(0)" class="btn btn-primary">Este examen ya fue presentado</button>
        </div>
    </div>

    <div class="col-md-6  col-xl-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Examen de prueba 3</h3>

                <div class="card-options"> <a href="javascript:void(0)" class="btn btn-primary btn-sm">Categoria II</a> <a href="javascript:void(0)" class="btn btn-secondary btn-sm ms-2">Certificación</a> </div>
            </div>
            {{-- <div class="card-alert alert alert-warning mb-0"> Adding action was successful </div> --}}
            <div class="card-body"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum </div>
            <button disabled href="javascript:void(0)" class="btn btn-primary">Este examen ya fue presentado</button>
        </div>
    </div>

    <div class="col-md-6  col-xl-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Examen de prueba 4</h3>

                <div class="card-options"> <a href="javascript:void(0)" class="btn btn-primary btn-sm">Categoria II</a> <a href="javascript:void(0)" class="btn btn-secondary btn-sm ms-2">Certificación</a> </div>
            </div>
            {{-- <div class="card-alert alert alert-warning mb-0"> Adding action was successful </div> --}}
            <div class="card-body"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum </div>
            <button disabled href="javascript:void(0)" class="btn btn-primary">Este examen ya fue presentado</button>
        </div>
    </div>
</div>



@endsection



