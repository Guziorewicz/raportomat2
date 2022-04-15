<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <h1> Hey admin</h1>
        <br>
        <h3>Lista twoich Adminów</h3>
        <table class="table table-hover table-dark tabelka">
            <theard>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Mail</th>
                    <th>Akcje</th>
                </tr>
            </theard>
            <tbody>
            @foreach($listaAdmin as $listAdmin)
                <tr>
                    <th scope="row">{{ $listAdmin->id}}</th>
                    <th>{{ $listAdmin->name}}</th>
                    <th>{{ $listAdmin->email}}</th>
                    <td><a href="{{route('juzers.show', ['juzer' => $listAdmin->id])}}" class="btn btn-primary">Podgląd</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
<h3>Lista twoich juzerów</h3>
        <table class="table table-hover table-dark tabelka">
            <theard>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Mail</th>
                    <th>Akcje</th>
                </tr>
            </theard>
            <tbody>
            @foreach($listaUser as $listUser)
                <tr>
                    <th scope="row">{{ $listUser->id}}</th>
                    <th>{{ $listUser->name}}</th>
                    <th>{{ $listUser->email}}</th>
                    <td><a href="{{route('juzers.show', ['juzer' => $listUser->id])}}" class="btn btn-primary">Podgląd</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <h3>Lista modułow</h3>
        <table class="table table-hover table-dark tabelka">
            <theard>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Desc</th>

                </tr>
            </theard>
            <tbody>
            @foreach($moduly as $modul)
                <tr>
                    <th scope="row">{{ $modul->id}}</th>
                    <th>{{ $modul->name}}</th>
                    <th>{{ $modul->description}}</th>
                </tr>
                @endforeach
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
