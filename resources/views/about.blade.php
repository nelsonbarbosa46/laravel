@if (5 < 10)
    <p>5 é menor que 10</p>
@elseif (5 == 10)
    <p>5 é menor que 10</p>
@else 
    <p>Todas as condições estão erradas</p>
@endif

@unless (empty($name))
    <h2>O nome não está vazio</h2>
@endunless

@empty($name)
    <h2>O nome está vazio</h2>
@endempty

@isset($name)
    <h2>Nome foi definido</h2>
@endisset