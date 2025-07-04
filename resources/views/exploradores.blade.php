<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-xl font-bold mb-4 text-center">Exploradores Cadastrados</h1>

                    <div class="flex justify-center">
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

                    

                    <div class="pagination mt-6">
                        {{ $exploradores->links() }}
                    </div>

                    <div class="flex justify-center mt-6";">
                        <a href="{{ route('exploradores.create') }}"
                           class="bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded transition text-base"
                           style="min-width: 220px; text-align: center; background-color: #000000;">
                           Cadastrar Novo Explorador
                        </a>
                    </div>

                    <div class="flex justify-center mt-6";">
                        <a href="{{ route('exploradores.atualizar') }}"
                           class="bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded transition text-base"
                           style="min-width: 220px; text-align: center; background-color: #000000;">
                           Atualizar Explorador
                        </a>
                    </div>

                    <style>
                        .pagination {
                            display: flex;
                            justify-content: center;
                            margin-top: 1.5rem;
                            gap: 0.25rem;
                        }
                        .pagination .page-link, .pagination span {
                            padding: 4px 12px;
                            border-radius: 4px;
                            border: 1px solid #ddd;
                            background: #f3f4f6;
                            color: #333;
                            font-size: 1rem;
                            text-decoration: none;
                            margin: 0 2px;
                            transition: background 0.2s, color 0.2s;
                        }
                        .pagination .page-link:hover {
                            background: #2563eb;
                            color: #fff;
                        }
                        .pagination .active span {
                            background: #2563eb;
                            color: #fff;
                            border-color: #2563eb;
                            cursor: default;
                        }
                        .pagination .disabled span {
                            color: #aaa;
                            background: #f5f5f5;
                            cursor: not-allowed;
                        }
                    </style>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>