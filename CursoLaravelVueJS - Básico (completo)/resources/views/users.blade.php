<h1>{{ $title }}</h1>
@foreach ($users as $user)
    <li>{{ $user }}</li>
@endforeach
@if (! empty($users))
    ...
@elseif ($users < 3)
    <p>Hay menos de 3 usuarios registrados.</p>
@else
    <p>No hay usuarios registrados.</p>
@endif