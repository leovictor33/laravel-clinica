<!-- Atualização da view index -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clientes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Botão para criar novo cliente -->
                    <div class="mb-4 flex items-center justify-between">
                        <a href="{{ route('clientes.create') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">
                            {{ __('Criar Novo Cliente') }}
                        </a>
                    </div>

                    <!-- Tabela de Clientes -->
                    <table class="min-w-full table-auto mt-4">
                        <thead>
                        <tr>
                            <th class="px-4 py-2 text-left">#</th>
                            <th class="px-4 py-2 text-left">Nome</th>
                            <th class="px-4 py-2 text-left">Email</th>
                            <th class="px-4 py-2 text-left">Telefone</th>
                            <th class="px-4 py-2 text-left">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($clientes as $cliente)
                            <tr>
                                <td class="px-4 py-2">{{ $cliente->id }}</td>
                                <td class="px-4 py-2">{{ $cliente->nome }}</td>
                                <td class="px-4 py-2">{{ $cliente->email }}</td>
                                <td class="px-4 py-2">{{ $cliente->telefone }}</td>
                                <td class="px-4 py-2 flex items-center space-x-4">
                                    <a href="{{ route('clientes.show', $cliente->id) }}" class="text-green-500">{{ __('Ver') }}</a>
                                    <a href="{{ route('clientes.edit', $cliente->id) }}" class="text-blue-500">{{ __('Editar') }}</a>
                                    <form method="POST" action="{{ route('clientes.destroy', $cliente->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500" onclick="return confirm('{{ __('Tem certeza que deseja excluir este cliente?') }}')">
                                            {{ __('Excluir') }}
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
