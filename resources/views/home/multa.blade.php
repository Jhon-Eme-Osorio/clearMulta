@extends('layouts.vistaprincipal')

@section('contenido')
<div class="mx-1 mt-3 bg-dark">
    <div class="col-lg-6 mx-auto">
        <div class="text-white text-center pt-4">
            <p>MULTA</p>
        </div>
        <form action="" method="post">
            @csrf
            <div class="row mx-5">
                
                <div class="col-md-12 text-white">
                    <label for="correo" class="form-label mt-3 ">Correo</label>
                    <input type="email" class="form-control @error('correo') is-invalid @enderror"
                        id="correo" name="correo" value="{{ old('correo') }}">
                    @error('correo')
                        <span class="invalid-feedback"></span>
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>
                <div class="col-md-12 text-white">
                    <label for="correo" class="form-label mt-3 ">Multa</label>
                    <div class="mb-3">
                        <input class="form-control" type="file" id="formFile" name="imagen" accept="image/*"
                            required>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <input type="submit" value="Enviar"
                        class="btn btn-light btn-outline-success mt-3 mb-3" name="enviar">
                </div>
                <p class="text-white text-center">
                    Al hacer clic en Enviar, acepta
                    <a href="#!" class="text-decoration-none">termino y condiciones</a>
                    <br>de ClearMulta.
                </p>
            </div>
        </form>
    </div>
</div>
@endsection