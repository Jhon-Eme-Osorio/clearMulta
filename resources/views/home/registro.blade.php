@extends('layouts.vistaprincipal')

@section('contenido')
<div class="mx-1 mt-3 bg-dark">
    <div class="col-lg-12">
        <div class="text-white text-center pt-4">
            <p>REGISTRO</p>
        </div>
        <form action="" method="post">
            @csrf
            <div class="row mx-5">
                <div class="col-md-6 text-white mt-3">
                    <label for="nameUser" class="form-label">Nombre</label>
                    <input type="text"
                        class="form-control  @error('nameUser') is-invalid @enderror" id="nameUser"
                        name="nameUser" value="{{ old('nameUser') }}">
                    @error('nameUser')
                        <span class="invalid-feedback"></span>
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>
                <div class="col-md-6 text-white mt-3">
                    <label for="lastName" class="form-label">Apellido</label>
                    <input type="text"
                        class="form-control @error('lastName') is-invalid @enderror" id="lastName"
                        name="lastName" value="{{ old('lastName') }}">
                    @error('lastName')
                        <span class="invalid-feedback"></span>
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>
                <div class="col-md-6 text-white mt-3">
                    <label for="lastName" class="form-label">Tipo de identidad</label>
                    
                    <div>
                        <input class="form-check-input" type="radio" name="identidad" id="c.c">
                        <label class="form-check-label" for="c.c">C.C &nbsp</label>

                        <input class="form-check-input" type="radio" name="identidad" id="c.e">
                        <label class="form-check-label" for="c.e">C.E</label>
                    </div>
                                        
                </div>
                <div class="col-md-6 text-white">
                    <label for="correo" class="form-label mt-3 "></label>
                    <input type="number" class="form-control @error('correo') is-invalid @enderror"
                        id="correo" name="correo" value="{{ old('correo') }}">
                    @error('correo')
                        <span class="invalid-feedback"></span>
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>
                <div class="col-md-6 text-white">
                    <label for="correo" class="form-label mt-3 ">Correo</label>
                    <input type="email" class="form-control @error('correo') is-invalid @enderror"
                        id="correo" name="correo" value="{{ old('correo') }}">
                    @error('correo')
                        <span class="invalid-feedback"></span>
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="col-md-6 text-white">
                    <label for="fecha" class="form-label mt-3">Fecha de nacimiento</label>
                    <input type="date" class="form-control @error('fecha') is-invalid @enderror"
                        id="fecha" name="fecha" min="{{ date('Y-m-d') }}"
                        value="{{ old('fecha') }}">
                    @error('fecha')
                        <span class="invalid-feedback"></span>
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="col-md-6 text-white">
                    <label for="correo" class="form-label mt-3 ">Telefono</label>
                    <input type="email" class="form-control @error('correo') is-invalid @enderror"
                        id="correo" name="correo" value="{{ old('correo') }}">
                    @error('correo')
                        <span class="invalid-feedback"></span>
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="col-md-6 text-white">
                    <label for="correo" class="form-label mt-3 ">Direccion</label>
                    <input type="text" class="form-control @error('correo') is-invalid @enderror"
                        id="correo" name="correo" value="{{ old('correo') }}">
                    @error('correo')
                        <span class="invalid-feedback"></span>
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="col-md-6 text-white">
                    <label for="hora" class="form-label mt-3">Tipo de vehiculo</label>
                    <select id="hora" class="form-select @error('hora') is-invalid @enderror"
                        name="hora">
                        <option selected disabled>Selecciona un vehiculo</option>
                        <option>Carro</option>
                        <option>Moto</option>
                        <option>Bus</option>
                    </select>
                    @error('hora')
                        <span class="invalid-feedback"></span>
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>
                <div class="col-md-6 text-white">
                    <label for="correo" class="form-label mt-3 ">Matricula</label>
                    <input type="text" class="form-control @error('correo') is-invalid @enderror"
                        id="correo" name="correo" value="{{ old('correo') }}">
                    @error('correo')
                        <span class="invalid-feedback"></span>
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>
                <div class="col-md-6 text-white">
                    <label for="service" class="form-label mt-3">Metodo de pago</label>
                    <select id="service" class="form-select" name="servicio" required>
                        <option disabled selected>Elija un metodo de pago</option>
                        <option>Tarjeta</option>
                        <option>Transferencia</option>
                        <option>Daviplata</option>
                        {{-- @foreach ($servicios as $servicio)
                            <option value="{{ $servicio->id }}"> {{ $servicio->nombre }}</option>
                        @endforeach --}}
                    </select>
                </div>
                <div class="col-md-6 text-white">
                    <label for="correo" class="form-label mt-3 ">Precio</label>
                    <input type="text" class="form-control @error('correo') is-invalid @enderror"
                        id="correo" name="correo" value="$ 195.000" disabled>
                </div>
                <div class="col-md-3 ">
                    <input type="submit" value="Registrar"
                        class="btn btn-light btn-outline-success mt-3 mb-3" name="reservar">
                </div>
                <p class="text-white text-center">
                    Al hacer clic en Registrarse, acepta
                    <a href="#!" class="text-decoration-none">termino y condiciones</a>
                    <br>de ClearMulta.
                </p>
            </div>
        </form>
    </div>
</div>
@endsection