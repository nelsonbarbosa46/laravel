@extends('layout.app')

@section('content')
    <div class="m-auto w-4/8 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Adicionar uma nova marca
            </h1>
        </div>

        <div class="flex justify-center pt-20">
            <form action="/cars" method="post">
                @csrf
                <div class="block">
                    <input type="text" name="name" class="block shadow-5xl mb-10 p-2 w-80
                              italic placeholder-gray-400" placeholder="Nome da marca">
                    <input type="text" name="founded" class="block shadow-5xl mb-10 p-2 w-80
                              italic placeholder-gray-400" placeholder="Ano que foi fundado">
                    <input type="text" name="description" class="block shadow-5xl mb-10 p-2 w-80
                          italic placeholder-gray-400" placeholder="Descrição">

                    <button type="submit"
                    class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold">
                        Criar
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
