<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
  

        <form action="{{route('juzers.update', ['juzer' => $user->id])}}" method="POST" id="contactForm" novalidate="novalidate" > <!-- akcja formularza z wysłaniem danych do bazu-->
                            @csrf
                            @method('PUT')
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input value="{{$user->name}}" class="form-control" id="name" type="text" name="name" placeholder="Enter your numer faktury..." data-sb-validations="required" />
                                <label for="name">Nazwa Juzera</label>
                                
                            </div>
                            <!--  address input-->
                            <div class="form-floating mb-3">
                                <input value="{{$user->email}}" class="form-control" id="email" type="text" name="email" placeholder="np tu kurwa" data-sb-validations="required" />
                                <label for="adres">Mail Jego</label>
                                
                            </div>

                            <button class="btn btn-primary text-uppercase " id="submitButton" type="submit">Zapisz</button>
                            <a href="{{route('juzers.show', ['juzer' => $user->id])}}"><button class="btn text-uppercase " id="submitButton" type="submit">Wróć</a></button>
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
