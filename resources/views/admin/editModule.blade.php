<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
  

        <h3>Moduły</h3>
        <form action="{{route('juzer.updateModules', ['juzer' => $daneModuly->daneModuly])}}" method="POST" id="contactForm" novalidate="novalidate" > <!-- akcja formularza z wysłaniem danych do bazu-->
                            @csrf
                            @method('PUT')
        <table class="table table-hover table-dark tabelka">
            <theard>
                <tr>
                    <th>Name</th>
                    <th>Type</th>
                </tr>
            </theard>
            <tbody>


            @foreach($daneModuly as $danaModuly)
                <tr>
                    <th>{{ $danaModuly->name}}</th>
                    <th><select name="type" class="custom-select" id="inputGroupSelect01">
                        <option selected>{{ $danaModuly->type}}</option>
                        @foreach($types as $type)
                        <option value="$type->type"> {{$type->type}} </option>
                        @endforeach
                    </select>
                    </th>
                   
                </tr>
                @endforeach
                </tbody>
                
        </table>
        <button class="btn btn-primary text-uppercase " id="submitButton" type="submit">Zmień</button>
<a href="{{route('juzers.show', ['juzer' => $userModule->id])}}"><button class="btn text-uppercase " id="submitButton" type="submit">Wróć</a></button>
</form>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
