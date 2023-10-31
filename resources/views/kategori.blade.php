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
            <th colspan="3">Paragraf</th>
        </thead>
        @foreach($kategori as $k)
        <tbody>
            <td>{{ $k->id }}</td>
            <td>{{ $k->nama }}</td>
            <td>{{ $k->deskripsi }}</td>
            <td><a href="{{ route('kt.edit',$k->id) }}">Edit</a></td>
            <td><form action="{{ route('kt.delete',$k->id) }}" method="POST"><button>Delete</button>
            @csrf
            @method('delete')
            </form></td>
        </tbody>
        @endforeach
    </table>
</body>
</html>