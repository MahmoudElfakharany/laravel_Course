<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>


    <div class="col container">
        <form action="{{ route('store') }}" method="POST">
            @csrf
            <div class="d-flex flex-column justify-content-center align-items-center">
                <div class="row justify-content-center align-items-center w-50">
                    <div>
                        <label class="form-label" for="title">Title</label>
                        <input class="form-control" type="text" name="title">
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>

                        <label class="form-label" for="postedBy">Posted By</label>

                        <input class="form-control" type="text" name="postedBy">
                        @error('postedBy')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label class="form-label" for="created_at">Created At</label>
                        <input class="form-control" type="text" name="created_at">
                        @error('created_at')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label class="form-label" for="description">Description</label>
                        <input class="form-control" type="text" name="description">
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
        </form>
    </div>
    <input class="btn btn-primary col-2 mt-3" type="submit">
    </div>
    </div>
</body>

</html>
