@extends('layouts.app')

@section('content')
        <h1>Página Inicial</h1>
        <h2>Galeria</h2>
        <div>
            <div>
                <h3>Imagem 1</h3>
                <img src="{{asset('storage/img/img1.jpg')}}" width="50%" alt="" srcset="">
            </div>
            <div>
                <h3>Imagem 2</h3>
                <img src="{{asset('storage/img/img2.jpg')}}" width="50%" alt="" srcset="">
            </div>
            
        </div>
@endsection