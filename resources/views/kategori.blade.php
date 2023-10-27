<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ikan Goreng</title>
</head>
<body>
    <table border="5">
        <thead>
            <th>ID</th>
            <th>Title</th>
            <th>Paragraf</th>
        </thead>
        @foreach($kategori as $k)
        <tbody>
            <td>{{ $k->id }}</td>
            <td>{{ $k->nama }}</td>
            <td>{{ $k->deskripsi }}</td>
        </tbody>
        @endforeach
    </table>
</body>
</html>