@extends('layout.app')

@section('content')
    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Carros
            </h1>
        </div>

        <div class="pt-10">
            <a href="cars/create" class="border-b-2 pb-2 border-dotted italic text-gray-500">
                Adicionar novo marca de carro &rarr;
            </a>
        </div>

        <div class="w-5/6 py-10">
            <div class="m-auto">
                @foreach ($cars as $car)
                    <div class="float-right">
                        <a class="border-b-2 pb-2 border-dotted italic text-green-500"
                        href="cars/{{$car->id}}/edit">
                        Editar
                        </a>
                        <form action="/cars/{{$car->id}}" method="POST" class="pt-3">
                            @csrf
                            @method('delete')
                            <button type="submit"
                            class="border-b-2 pb-2 border-dotted italic text-red-500">Eliminar</button>
                        </form>
                    </div>
                    <span class="uppercase text-blue-500 font-bold text-xs italic">
                        Fundado: {{$car->founded}}
                    </span>
                    <h2 class="text-gray-700 text-5xl">
                        {{$car->name}}
                    </h2>
                    <p class="text-lg text-gray-700 py-6">
                        {{$car->description}}
                    </p>

                    <hr class="mt-4 mb-8">
                @endforeach
            </div>
        </div>
    </div>
@endsection
