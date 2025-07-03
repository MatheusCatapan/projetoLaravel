<!DOCTYPE html>
<html>
<head>
    <title>Lista de Exploradores</title>
</head>
<body>
 <x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-xl font-bold mb-4">Lista de Exploradores</h1>
                    <table class="min-w-full border border-gray-300">
                        <thead>
                            <tr>
                                <th class="border px-4 py-2">ID</th>
                                <th class="border px-4 py-2">Nome</th>
                                <th class="border px-4 py-2">Idade</th>
                                <th class="border px-4 py-2">Latitude</th>
                                <th class="border px-4 py-2">Longitude</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($exploradores as $explorador)
                                <tr>
                                    <td class="border px-4 py-2">{{ $explorador->id }}</td>
                                    <td class="border px-4 py-2">{{ $explorador->nome }}</td>
                                    <td class="border px-4 py-2">{{ $explorador->idade }}</td>
                                    <td class="border px-4 py-2">{{ $explorador->latitude }}</td>
                                    <td class="border px-4 py-2">{{ $explorador->longitude }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
</body>
</html>