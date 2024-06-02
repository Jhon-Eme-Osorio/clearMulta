@extends('layouts.vistaprincipal')

@section('contenido')
<div class="mx-1 mt-3 bg-dark">
    <div class="col-lg-6 mx-auto">
        <div class="text-white text-center pt-4">
            <p>CONTACTO</p>
        </div>
        <form action="" method="post">
            @csrf
            <div class="row mx-5">
                <div class="col-lg-12 text-white mt-3">
                    <label for="nameUser" class="form-label">Nombre</label>
                    <input type="text"
                        class="form-control  @error('nameUser') is-invalid @enderror" id="nameUser"
                        name="nameUser" value="{{ old('nameUser') }}">
                    @error('nameUser')
                        <span class="invalid-feedback"></span>
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>
                
                <div class="col-lg-12 text-white">
                    <label for="correo" class="form-label mt-3 ">Correo</label>
                    <input type="email" class="form-control @error('correo') is-invalid @enderror"
                        id="correo" name="correo" value="{{ old('correo') }}">
                    @error('correo')
                        <span class="invalid-feedback"></span>
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="col-lg-12 mt-3 text-white">
                    <label for="correo" class="form-label mt-3 ">Mensaje</label><br>
                    <textarea name="mensaje" id="mensaje" cols="30" rows="5"></textarea>
                </div>

                <div class="col-md-3 ">
                    <input type="submit" value="Enviar"
                        class="btn btn-light btn-outline-success mt-3 mb-5" name="enviar-mensaje">
                </div>
            </div>
        </form>
    </div>
</div>
@endsection