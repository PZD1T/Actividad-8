<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Divisions Table</title>
</head>
<body>
    
<div class="container mt-4">
    <h1 class="text-center">Divisions Table</h1>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Conference</th>
                <th>Division</th>
            </tr>
        </thead>
        <tbody>

        @foreach ($divisions as $division)

        <tr>
            <td>{{ $division->id }}</td>
            <td>{{ $division->conf }}</td>
            <td>{{ $division->divsn }}</td>
        </tr>

        @endforeach

        </tbody>
    </table>
</div>

</body>
</html>
