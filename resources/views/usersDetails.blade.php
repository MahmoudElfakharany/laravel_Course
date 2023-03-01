<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>
    @extends('layouts.app')
    <div style="position: relative; top:70px;">
        <fieldset style="border: 2px solid black;">
            <legend>user</legend>
            <table class="table">
                <thead>
                    <tr>
                        <th>NAME</th>
                        <th>AGE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $users->name }}</td>
                        <td>{{ $users->age }}</td>
                    </tr>
                </tbody>
            </table>
        </fieldset>

        <fieldset style="border: 2px solid black;">
            <legend>POSTS</legend>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Created At</th>
                        <th>Description</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($users->posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->created_at }}</td>
                            <td>{{ $post->description }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </fieldset>
    </div>
</body>

</html>
