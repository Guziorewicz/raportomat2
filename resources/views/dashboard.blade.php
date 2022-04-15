<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <h2> hey user </h2>
        <h3>Lista twoich modułów</h3>
        <table class="table table-hover table-dark tabelka">
            <theard>
                <tr>
                    <th>modul 1</th>
                    <th>modul 2</th>
                    <th>modul 3</th>
                    <th>modul 4</th>
                    <th>modul 5</th>
                </tr>
            </theard>

            <tbody>


            </tbody>
        </table>
        
    </x-slot>




    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>

</x-app-layout>
