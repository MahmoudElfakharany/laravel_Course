<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<style>
    table {
        /* border-collapse: collapse; */
        /* width: 500px; */
        position: relative;
        top: 200px;
    }


    th,
    td {
        border: 1px solid;
    }
</style>

<body>

    <div class="d-flex flex-col">
        <a href="{{ route('create') }}" class="btn btn-primary">CREATE</a>
    </div>

    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Action</th>

                </tr>
            </thead>
            @foreach ($authors as $author)
                <tr>
                    <td>{{ $author->id }}</td>
                    <td>{{ $author->name }}</td>
                    <td>{{ $author->age }}</td>
                    <td>
                        <div> <a href="{{ route('viewAuthorDetails', $author->id) }}" class="btn btn-success"
                                style="display: inline-block">VIEW</a>
                            <form action="{{ route('update', $author->id) }}" style="display: inline-block;">
                                <button class="btn btn-success">UPDATE</button>
                            </form>
                            <form action="{{ route('destroy', $author->id) }}" method="author"
                                style="display: inline-block">
                                @method('DELETE')
                                @csrf()
                                <button class="btn btn-success" type="submit">DELETE</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
