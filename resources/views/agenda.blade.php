<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Agenda Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h2 class="mb-0">📓 Mi Agenda SafeKeep</h2>
            </div>
            <div class="card-body">
                
                <form action="/agenda" method="POST" class="row g-3">
                    @csrf 
                    <div class="col-md-5">
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre completo" required>
                    </div>
                    <div class="col-md-5">
                        <input type="text" name="telefono" class="form-control" placeholder="Teléfono" required>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-success w-100">Guardar</button>
                    </div>
                </form>

                <hr class="my-4">

                <h3>Lista de Contactos</h3>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>Nombre</th>
                                <th>Teléfono</th>
                                <th>Fecha</th>
                                <th>Acciones</th> </tr>
                        </thead>
                        <tbody>
                            @forelse($contactos as $contacto)
                                <tr>
                                    <td>{{ $contacto->nombre }}</td>
                                    <td>{{ $contacto->telefono }}</td>
                                    <td>{{ $contacto->created_at->format('d/m/Y H:i') }}</td>
                                    <td>
                                        <form action="/agenda/{{ $contacto->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">No hay contactos todavía.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>