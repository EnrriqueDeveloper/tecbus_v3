<!DOCTYPE html>
<html lang="en">

<head>
    <title>PDF</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbkjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <style>
        .date-time-container {
            margin-top: -40px;
        }

        .date-time-container p {
            margin-bottom: 5px;
        }
        .table-container {
            margin: 2rem;
        }
        .table {
            border-collapse: separate;
            border-spacing: 0;
            width: 100%;
        }
        .table th,
        .table td {
            border: 1px solid #e2e8f0;
            padding: 0.75rem;
            text-align: center;
        }
    </style>

</head>

<body>
    <div class="flex">
        <img src="img/logo2.png" alt="">
        <div class="d-flex justify-content-end date-time-container">
            <div class="text-end">
            <?php
                date_default_timezone_set('America/Lima');
                ?>
                <p class="text-end">Fecha: {{ date('Y-m-d') }}</p>
                <p class="text-end">Hora: {{ date('H:i:s') }}</p>
            </div>
            <br>
            <div>
                <h2 style="text-align: center">REPORTE RUTA PARADEROS</h2>
            </div>
        </div>
        <div class="table-container">
        <table class="table">
            <thead class="bg-gray-300 text-white">
                <tr>
                    <th>ID</th>
                    <th>NUM RUTA</th>
                    <th>PARADEROS</th>
                    <th>HORA PARTIDA</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ruta_paraderos as $rutaparadero)
                <tr>
                    <td>{{ $rutaparadero->id }}</td>
                    <td>{{ $rutaparadero->num_ruta }}</td>
                    <td>{{ $rutaparadero->n_paradero }}</td>
                    <td>{{ $rutaparadero->hora_partida }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
       
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-c9X5d40GlpO2JJT/7hxBmvR66zx8ghWED4Ts9WvS0x0abJQSmHepn2rUoTme3Q3y"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-PlbI6q5oKsIfc8+HfYHnGr3nD1pnUIM47euAmHPRBSttlcZCzCbyy2d4mDCmO+7C" crossorigin="anonymous"></script>
</body>

</html>