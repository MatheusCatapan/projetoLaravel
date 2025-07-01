<!-- filepath: resources/views/exploradores/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Explorador</title>
</head>
<body>
    <x-app-layout>
    <h1>Cadastrar Explorador</h1>
    @if(session('success'))
        <p style="color:green;">{{ session('success') }}</p>
    @endif
    <form method="POST" action="{{ route('exploradores.store') }}">
        @csrf
        <label>Nome:</label>
        <input type="text" name="nome" value="{{ old('nome') }}" required>
        @error('nome') <span style="color:red;">{{ $message }}</span> @enderror
        <br>
        <label>Idade:</label>
        <input type="number" name="idade" value="{{ old('idade') }}" required>
        <br>
        <label>Latitude:</label>
        <input type="text" name="latitude" value="{{ old('latitude') }}" required>
        <br>
        <label>Longitude:</label>
        <input type="text" name="longitude" value="{{ old('longitude') }}" required>
        <br>
        <button type="submit">Salvar</button>
    </form>
</body>
</x-app-layout>
</html>
