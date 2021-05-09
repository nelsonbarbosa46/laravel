{{--@switch($name)
    @case('Nelson')
        <h2>O nome é Nelson</h2>
        @break
    @case("Ana")
        <h2>O nome é Ana</h2>
        @break
    @case("Mariana")
        <h2>O nome é Mariana</h2>
        @break
    @default
        <h2>Não existe nomes definidos</h2>
@endswitch


@for ($i = 0; $i < 10; $i++)
    <p>O número é {{$i}}</p>
@endfor

--}}
@foreach ($names as $name)
    <p>O nome é {{$name}}</p>
@endforeach
<hr>
@forelse ($names as $name)
    <p>O nome é {{$name}}</p>    
@empty
    <p>Não existe nomes</p>
@endforelse

@php
    $i = 0
@endphp
@while ($i < 10)
    <p>{{$i}}</p>
    @php
        $i++;
    @endphp
@endwhile