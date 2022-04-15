@extends('layouts.app')

@section('content')

<x-app-layout>
    <x-slot name="header">
        
        
        <h3>Dane usera {{$juzer->name}}</h3>
        <table class="table table-hover table-dark tabelka">
            <theard>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Mail</th>
                    <th>Actions</th>
                </tr>
            </theard>
            <tbody>

                <tr>
                    <th scope="row">{{ $juzer->id}}</th>
                    <th>{{ $juzer->name}}</th>
                    <th>{{ $juzer->email}}</th>   
                    <th><a href="{{route('admin.editUser', [$juzer->id])}}" class="btn btn-primary">Edytuj</a></th> 
                </tr>

            </tbody>
        </table>

        <h3>Moduły</h3>
        
        <table class="table table-hover table-dark tabelka">
            <theard>
                <tr>
                    <th>Name</th>
                    <th>Type</th>
                    
                </tr>
            </theard>
            <tbody>


            @foreach($daneUsera as $danaUsera)
                <tr>
                    <th>{{ $danaUsera->name}}</th>
                    <th>{{ $danaUsera->type}}</th>
                   
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{route('admin.editModule', [$juzer->id])}}" class="btn btn-primary">Edytuj Moduły</a>
        <a href="{{route('juzers.index')}}"><button class="btn text-uppercase " id="submitButton" type="submit">Wróć</a></button>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
@endsection