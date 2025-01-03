<!-- Atualização da view show -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalhes do Cliente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Título -->
                    <h3 class="text-lg font-medium text-gray-800 mb-4">{{ $cliente->nome }}</h3>

                    <!-- Detalhes -->
                    <div class="mb-4">
                        <p><strong>{{ __('Email:') }}</strong> {{ $cliente->email }}</p>
                        <p><strong>{{ __('Telefone:') }}</strong> {{ $cliente->telefone }}</p>
                        <p><strong>{{ __('Data de Nascimento:') }}</strong> {{ $cliente->data_nascimento ? $cliente->data_nascimento->format('d/m/Y') : 'Não informado' }}</p>
                        <p><strong>{{ __('Endereço:') }}</strong> {{ $cliente->endereco ?? 'Não informado' }}</p>
                    </div>

                    <!-- Ações -->
                    <div class="flex items-center space-x-4">
                        <a href="{{ route('clientes.edit', $cliente->id) }}" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                            {{ __('Editar') }}
                        </a>
                        <form method="POST" action="{{ route('clientes.destroy', $cliente->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700" onclick="return confirm('{{ __('Tem certeza que deseja excluir este cliente?') }}')">
                                {{ __('Excluir') }}
                            </button>
                        </form>
                        <a href="{{ route('clientes.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-600 text-white rounded-md hover:bg-gray-700">
                            {{ __('Voltar') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
