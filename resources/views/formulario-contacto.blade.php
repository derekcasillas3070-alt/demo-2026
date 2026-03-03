<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Contacto</title>
</head>
<body>

    <h2>Formulario de Contacto</h2>

    {{-- ✅ Mensaje de éxito --}}
    @if (session('success'))
        <div style="padding:10px; background:#d4edda; border:1px solid #c3e6cb; margin-bottom:10px;">
            {{ session('success') }}
        </div>
    @endif

    {{-- ✅ Errores de validación --}}
    @if ($errors->any())
        <div style="padding:10px; background:#f8d7da; border:1px solid #f5c6cb; margin-bottom:10px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('recibe-formulario') }}" method="POST">
        @csrf

        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}">
        <br><br>

        <label for="correo">Correo:</label><br>
        <input type="email" id="correo" name="correo" value="{{ old('correo') }}">
        <br><br>

        <label for="mensaje">Mensaje:</label><br>
        <textarea id="mensaje" name="mensaje" rows="4" cols="50">{{ old('mensaje') }}</textarea>
        <br><br>

        <button type="submit">Enviar</button>
    </form>

</body>
</html>