<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Ikan Goreng</title>
</head>

<body>
    <div class="container-fluid my-3">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col text-center">ID</th>
                    <th scope="col text-center">Title</th>
                    <th scope="col text-center">Paragraf</th>
                    <th scope="col text-center" colspan="2">Edit Or Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($list as $l)
                    <tr>
                        <th scope="row">{{ $l->id }}</th>
                        <td>{{ $l->title }}</td>
                        <td>{{ $l->paragraf }}</td>
                        <td><button class="btn btn-outline-secondary btn-text-secondary"><a href="{{ route('post.edit',$l->id) }}">Edit</a></button></td>
                        <td><form action="{{ route('post.delete',$l->id) }}" method="post"><button class="btn btn-outline-danger btn-text-danger">Delete</button>
                            @csrf
                            @method('delete')
                        </form></td>
                    </tr>
                @endforeach
            </tbody>
        </table>    
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
</body>

</html>
