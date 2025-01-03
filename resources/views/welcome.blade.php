<!-- Atualização da view welcome -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bem-vindo à Clínica Odontológica Sorriso Maroto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="lead text-center">
                        Somos uma clínica dedicada ao cuidado e bem-estar de nossos pacientes, com mais de 10 anos de experiência oferecendo tratamentos odontológicos de qualidade.
                    </p>

                    <h4 class="mt-4">Nossos Serviços</h4>
                    <ul>
                        <li>Consultas Odontológicas Preventivas</li>
                        <li>Tratamento de Cáries e Canal</li>
                        <li>Ortodontia (Aparelhos Dentários)</li>
                        <li>Implantes Dentários</li>
                        <li>Estética Dental (Clareamento, Facetas, etc.)</li>
                    </ul>

                    <h4 class="mt-4">Nossa Missão</h4>
                    <p>
                        Proporcionar aos nossos pacientes um atendimento odontológico humanizado, com tecnologia de ponta e profissionais altamente qualificados, garantindo a saúde bucal e o sorriso perfeito.
                    </p>

                    <h4 class="mt-4">Entrar em Contato</h4>
                    <p>
                        Se você deseja agendar uma consulta ou obter mais informações, entre em contato conosco. Estamos aqui para ajudar!
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
