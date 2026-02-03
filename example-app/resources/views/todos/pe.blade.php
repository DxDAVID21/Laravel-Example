  <!-- <!DOCTYPE html>
  <html lang="ca">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </head>
  <style>
    .done{
      text-decoration: line-through;
      color: #999;
    }
  </style>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Todo App</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <h1>Todo List</h1>
    <p>Total tareas: {{ $todos->count() }}</p>


    <form method="POST" action="/todos">
      @csrf
      <input type="text" name="title" placeholder="Nova tasca">
      <button type="submit">Afegir</button>
    </form>
    <ul>
    @foreach ($todos as $todo)
      <li>
        <form method="POST" action="/todos/{{ $todo->id }}" style="display:inline;">
          @csrf
          @method('PATCH')
          <button type="submit">Check</button>
        </form>

        <span class="{{ $todo->completed ? 'done' : '' }}">
          {{ $todo->title }}
        </span>

        <form method="POST" action="/todos/{{ $todo->id }}" style="display:inline;">
          @csrf
          @method('DELETE')
          <button type="submit">Eliminar</button>
        </form>
      </li>
    @endforeach  
    </ul>
  </body>
  </html> -->