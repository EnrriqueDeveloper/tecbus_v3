<!DOCTYPE html>
<html lang="en">

<head>
    <title>PDF</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbkjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <div class="flex">
        <div>
            <img src="img/admin.png" alt="" width="50px" height="50px">
        </div>
    </div>
    <div>
    <?php
     date_default_timezone_set('America/Lima');
     ?>
    <h1 style="text-align: center">REPORTE RUTA PARADEROS</h1>
    <p class="text-right">Fecha: {{ date('Y-m-d') }}</p>
    <p class="text-right">Hora: {{ date('H:i:s') }}</p>
    <div>
    <table class="table table-bordered">
<thead class="bg-gray-300 text-white">
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">NUM RUTA</th>
                <th class="px-4 py-2">PARADEROS</th>
                <th class="px-4 py-2">HORA PARTIDA</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ruta_paraderos as $rutaparadero)
            <tr>
                <td class="text-center">{{ $rutaparadero->id }}</td>
                <td class="text-center">{{ $rutaparadero->num_ruta }}</td>
                <td class="text-center">{{ $rutaparadero->n_paradero }}</td>
                <td class="text-center">{{ $rutaparadero->hora_partida }}</td>
            </tr>
            @endforeach
        </tbody>    </table>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-c9X5d40GlpO2JJT/7hxBmvR66zx8ghWED4Ts9WvS0x0abJQSmHepn2rUoTme3Q3y"
    crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-PlbI6q5oKsIfc8+HfYHnGr3nD1pnUIM47euAmHPRBSttlcZCzCbyy2d4mDCmO+7C" crossorigin="anonymous"></script>
</body>

</html>
