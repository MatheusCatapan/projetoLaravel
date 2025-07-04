<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Atualizar Localização do Explorador</title>
    <style>
        body {
            background: #f4f4f4;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 400px;
            margin: 60px auto;
            background: #fff;
            padding: 32px 24px 24px 24px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }
        h2 {
            text-align: center;
            margin-bottom: 24px;
            color: #222;
        }
        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
            color: #333;
        }
        input[type="number"],
        input[type="text"] {
            width: 100%;
            padding: 8px 10px;
            margin-bottom: 16px;
            border: 1px solid #bbb;
            border-radius: 4px;
            font-size: 1rem;
            background: #fafafa;
        }
        .error {
            color: #d32f2f;
            font-size: 0.95em;
            margin-bottom: 10px;
            display: block;
        }
        button {
            width: 100%;
            background: #111;
            color: #fff;
            border: none;
            padding: 12px 0;
            border-radius: 4px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.2s;
        }
        button:hover {
            background: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Atualizar Localização</h2>
        <form method="POST" action="{{ route('exploradores.atualizar') }}">
            @csrf
            <label for="id">ID do Explorador:</label>
            <input type="number" id="id" name="id" value="{{ old('id') }}" required>
            @error('id') <span class="error">{{ $message }}</span> @enderror

            <label for="latitude">Latitude:</label>
            <input type="text" id="latitude" name="latitude" value="{{ old('latitude') }}" required>
            @error('latitude') <span class="error">{{ $message }}</span> @enderror

            <label for="longitude">Longitude:</label>
            <input type="text" id="longitude" name="longitude" value="{{ old('longitude') }}" required>
            @error('longitude') <span class="error">{{ $message }}</span> @enderror

            <button type="submit">Atualizar</button>
        </form>
    </div>
</body>
</html>