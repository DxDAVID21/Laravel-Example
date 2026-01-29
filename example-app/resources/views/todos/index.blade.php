<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo List</title>
</head>
<body>
  <h1>Todo List</h1>
  <p>Total tareas: {{ $todos->count() }}</p>


  <form method="POST" action="/todos">
    @csrf
    <input type="text" name="title" placeholder="Nova tasca">
    <button>Afegir</button>
  </form>
  <ul>
  @foreach ($todos as $todo)
    <li>
      <form method="POST" action="/todos/{{ $todo->id }}">
        @csrf
        @method('PATCH')
        <button>Check</button>
      </form>

      <span class="{{ $todo->completed ? 'done' : '' }}">
        {{ $todo->title }}
      </span>

      <form method="POST" action="/todos/{{ $todo->id }}">
        @csrf
        @method('DELETE')
        <button>Eliminar</button>
      </form>
    </li>
  @endforeach  
  </ul>
</body>
</html>