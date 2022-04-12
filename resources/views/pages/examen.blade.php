@extends('master')

@section('content')


<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Examen de Prueba</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Examen</a></li>
            <li class="breadcrumb-item active" aria-current="page">Examen de Prueba</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->


<!--Row open-->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header border-bottom-0">
                <h3 class="card-title">Form Wizard</h3>
            </div>
            <div class="card-body">
                <div id="smartwizard-3">
                    <ul>
                        <li><a href="#step-10">Terminos y condiciones</a></li>
                        <li><a href="#step-11">Parte 1</a></li>
                        <li><a href="#step-12">Parte 2</a></li>
                        <li><a href="#step-13">Parte 3</a></li>
                    </ul>
                    <div>
                        <div id="step-10" class="">
                            <form>
                                <div class="form-group">
                                    <p>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et repellendus odit cumque distinctio facilis repudiandae minima, architecto excepturi porro. Recusandae hic repudiandae fuga repellendus praesentium minima eius minus itaque tempora!
                                    </p>
                                    <p>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et repellendus odit cumque distinctio facilis repudiandae minima, architecto excepturi porro. Recusandae hic repudiandae fuga repellendus praesentium minima eius minus itaque tempora!
                                    </p>
                                </div>
                                <div class="form-group mb-0 justify-content-end">
                                    <div class="">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"
                                                name="example-checkbox2" value="option2">
                                            <span class="custom-control-label">Yo {{ auth()->user()->name.' '.auth()->user()->last_name }} acepto los terminos y condiciones</span>
                                        </label>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="step-11" class="">
                            <form>


                                @for ($i = 1; $i < 10; $i++)

                                <div class="form-group">
                                    <label>Pregunta {{ $i }}</label>
                                    <div class="form-row">
                                        <label style="padding:0 40px;" class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="pregunta-{{ $i }}" value="option1">
                                            <span class="custom-control-label">Respuesta 1</span>
                                        </label>
                                        <label style="padding:0 20px;" class="custom-control custom-radio"> <input type="radio" class="custom-control-input" name="pregunta-{{ $i }}" value="option1"> <span class="custom-control-label">Respuesta 2</span> </label>
                                        <label style="padding:0 20px;" class="custom-control custom-radio"> <input type="radio" class="custom-control-input" name="pregunta-{{ $i }}" value="option1"> <span class="custom-control-label">Respuesta 3</span> </label>
                                        <label class="custom-control custom-radio"> <input type="radio" class="custom-control-input" name="pregunta-{{ $i }}" value="option1"> <span class="custom-control-label">Respuesta 4</span> </label>
                                    </div>
                                </div>

                                @endfor

                            </form>
                        </div>
                        <div id="step-12" class="">
                            @for ($i = 1; $i < 10; $i++)

                                <div class="form-group">
                                    <label>Pregunta {{ $i }}</label>
                                    <div class="form-row">
                                        <label style="padding:0 40px;" class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="pregunta-{{ $i }}" value="option1">
                                            <span class="custom-control-label">Respuesta 1</span>
                                        </label>
                                        <label style="padding:0 20px;" class="custom-control custom-radio"> <input type="radio" class="custom-control-input" name="pregunta-{{ $i }}" value="option1"> <span class="custom-control-label">Respuesta 2</span> </label>
                                        <label style="padding:0 20px;" class="custom-control custom-radio"> <input type="radio" class="custom-control-input" name="pregunta-{{ $i }}" value="option1"> <span class="custom-control-label">Respuesta 3</span> </label>
                                        <label class="custom-control custom-radio"> <input type="radio" class="custom-control-input" name="pregunta-{{ $i }}" value="option1"> <span class="custom-control-label">Respuesta 4</span> </label>
                                    </div>
                                </div>

                                @endfor
                        </div>

                        <div id="step-13" class="">
                            @for ($i = 1; $i < 10; $i++)

                                <div class="form-group">
                                    <label>Pregunta {{ $i }}</label>
                                    <div class="form-row">
                                        <label style="padding:0 40px;" class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="pregunta-{{ $i }}" value="option1">
                                            <span class="custom-control-label">Respuesta 1</span>
                                        </label>
                                        <label style="padding:0 20px;" class="custom-control custom-radio"> <input type="radio" class="custom-control-input" name="pregunta-{{ $i }}" value="option1"> <span class="custom-control-label">Respuesta 2</span> </label>
                                        <label style="padding:0 20px;" class="custom-control custom-radio"> <input type="radio" class="custom-control-input" name="pregunta-{{ $i }}" value="option1"> <span class="custom-control-label">Respuesta 3</span> </label>
                                        <label class="custom-control custom-radio"> <input type="radio" class="custom-control-input" name="pregunta-{{ $i }}" value="option1"> <span class="custom-control-label">Respuesta 4</span> </label>
                                    </div>
                                </div>

                                @endfor
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--row closed-->


@endsection

@push('js')
    <!-- FORM WIZARD JS-->
    <script src="{{ asset('assets/plugins/formwizard/jquery.smartWizard.js') }}"></script>
    <script src="{{ asset('assets/plugins/formwizard/fromwizard.js') }}"></script>
@endpush
