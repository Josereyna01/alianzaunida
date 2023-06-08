<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>
<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                    <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                @else
                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Formulario</div>

                        <div class="card-body">
                            <form method="POST" action="/guardar">
                                @csrf

                                <div class="col-2">
    <label for="nombre_aval">Nombre aval:</label>
    <input type="text" name="nombre_aval" class="form-control" placeholder="Nombre aval" value="{{ isset($solicitud->nombre_aval) ? $solicitud->nombre_aval : '' }}">
</div>
<div class="col-2">
    <label for="ap_paterno_aval">Apellido paterno aval:</label>
    <input type="text" name="ap_paterno_aval" class="form-control" placeholder="Apellido paterno aval" value="{{ isset($solicitud->ap_paterno_aval) ? $solicitud->ap_paterno_aval : '' }}">
</div>
<div class="col-2">
    <label for="ap_materno_aval">Apellido materno aval:</label>
    <input type="text" name="ap_materno_aval" class="form-control" placeholder="Apellido materno aval" value="{{ isset($solicitud->ap_materno_aval) ? $solicitud->ap_materno_aval : '' }}">
</div>
<div class="col-2">
    <label for="sexo">Sexo:</label>
    <input type="text" name="sexo" class="form-control" placeholder="Sexo" value="{{ isset($solicitud->sexo) ? $solicitud->sexo : '' }}">
</div>
<div class="col-2">
    <label for="nacionalidad_aval">Nacionalidad aval:</label>
    <input type="text" name="nacionalidad_aval" class="form-control" placeholder="Nacionalidad aval" value="{{ isset($solicitud->nacionalidad_aval) ? $solicitud->nacionalidad_aval : '' }}">
</div>
<div class="col-2">
    <label for="fecha_nacimiento_aval">Fecha de nacimiento aval:</label>
    <input type="date" name="fecha_nacimiento_aval" class="form-control" placeholder="Fecha de nacimiento aval" value="{{ isset($solicitud->fecha_nacimiento_aval) ? $solicitud->fecha_nacimiento_aval : '' }}">
</div>
<div class="col-2">
    <label for="edad_aval">Edad aval:</label>
    <input type="number" name="edad_aval" class="form-control" placeholder="Edad aval" value="{{ isset($solicitud->edad_aval) ? $solicitud->edad_aval : '' }}">
</div>
<div class="col-2">
    <label for="curp_aval">CURP aval:</label>
    <input type="text" name="curp_aval" class="form-control" placeholder="CURP aval" value="{{ isset($solicitud->curp_aval) ? $solicitud->curp_aval : '' }}">
</div>
<div class="col-2">
    <label for="calle_aval">Calle aval:</label>
    <input type="text" name="calle_aval" class="form-control" placeholder="Calle aval" value="{{ isset($solicitud->calle_aval) ? $solicitud->calle_aval : '' }}">
</div>
<div class="col-2">
    <label for="numero_exterior_aval">Número exterior aval:</label>
    <input type="text" name="numero_exterior_aval" class="form-control" placeholder="Número exterior aval" value="{{ isset($solicitud->numero_exterior_aval) ? $solicitud->numero_exterior_aval : '' }}">
</div>
<div class="col-2">
    <label for="numero_interior_aval">Número interior aval:</label>
    <input type="text" name="numero_interior_aval" class="form-control" placeholder="Número interior aval" value="{{ isset($solicitud->numero_interior_aval) ? $solicitud->numero_interior_aval : '' }}">
</div>
<div class="col-2">
    <label for="colonia_aval">Colonia aval:</label>
    <input type="text" name="colonia_aval" class="form-control" placeholder="Colonia aval" value="{{ isset($solicitud->colonia_aval) ? $solicitud->colonia_aval : '' }}">
</div>
<div class="col-2">
    <label for="codigo_postal_aval">Código postal aval:</label>
    <input type="number" name="codigo_postal_aval" class="form-control" placeholder="Código postal aval" value="{{ isset($solicitud->codigo_postal_aval) ? $solicitud->codigo_postal_aval : '' }}">
</div>
<div class="col-2">
    <label for="municipio_aval">Municipio aval:</label>
    <input type="text" name="municipio_aval" class="form-control" placeholder="Municipio aval" value="{{ isset($solicitud->municipio_aval) ? $solicitud->municipio_aval : '' }}">
</div>
<div class="col-2">
    <label for="estado_civil_aval">Estado civil aval:</label>
    <input type="text" name="estado_civil_aval" class="form-control" placeholder="Estado civil aval" value="{{ isset($solicitud->estado_civil_aval) ? $solicitud->estado_civil_aval : '' }}">
</div>
<div class="col-2">
    <label for="correo_aval">Correo aval:</label>
    <input type="text" name="correo_aval" class="form-control" placeholder="Correo aval" value="{{ isset($solicitud->correo_aval) ? $solicitud->correo_aval : '' }}">
</div>
<div class="col-2">
    <label for="telefono_aval">Teléfono aval:</label>
    <input type="number" name="telefono_aval" class="form-control" placeholder="Teléfono aval" value="{{ isset($solicitud->telefono_aval) ? $solicitud->telefono_aval : '' }}">
</div>
<div class="col-2">
    <label for="telefono_cel_aval">Teléfono celular aval:</label>
    <input type="number" name="telefono_cel_aval" class="form-control" placeholder="Teléfono celular aval" value="{{ isset($solicitud->telefono_cel_aval) ? $solicitud->telefono_cel_aval : '' }}">
</div>