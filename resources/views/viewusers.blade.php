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
        /* position: relative; */
        /* top: 200px; */
    }


    th,
    td {
        border: 1px solid;
    }
</style>

<body>
    @extends('layouts.app')
    <div class="container col-12 pt-4" style="position: relative; top:50px;">
        <div class="d-flex flex-col">
            <h3>USERS</h3>
        </div>
    </div>

    <div class="container mt-4" style="position: relative; top:30px;">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Created At</th>
                    <th>Action</th>

                </tr>
            </thead>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>
                        <div> <a href="{{ route('viewusersDetails', $user->id) }}" class="btn btn-success"
                                style="display: inline-block">VIEW</a>
                            {{-- <form action="{{ route('update', $user->id) }}" style="display: inline-block;">
                                <button class="btn btn-success">UPDATE</button>
                            </form>
                            <form action="{{ route('destroy', $user->id) }}" method="user"
                                style="display: inline-block">
                                @method('DELETE')
                                @csrf()
                                <button class="btn btn-success" type="submit">DELETE</button> --}}
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="container" style="position: relative; top:40px">
        {{ $users->links() }}
    </div>
</body>

</html>
