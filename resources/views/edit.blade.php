<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Edit</title>
</head>
<body class="bg-light">

<div class="container my-5">
    <h1 class="text-center">Edit {{$users->name}}</h1>
    <form class="text-center" action="/update/{{$users->id}}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <input class="form-control" value="{{$users->name}}" name="name" type="text" placeholder="Name">
        </div>
        <div class="mb-3">
            <input class="form-control" value="{{$users->todo}}" name="todolist" type="text" placeholder="Input Todo">
        </div>
        <button class="btn btn-primary" type="submit">Edit</button>
    </form>
    <form  action="/delete/{{$users->id}}" method="POST" align="center" class="mt-2">
        @method('delete')
        @csrf
        <button type="submit"  class="btn btn-danger" type="submit">delete</button>
    </form>
</div>

</body>
</html>
