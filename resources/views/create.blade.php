<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Todolist</title>
</head>
<body class="bg-light">
   

<div class="container my-5">
    <h1 class="text-center">TODOLIST APPLICATION</h1>
    <form wire:submit="handleClick" class="text-center" action="store" method="POST">
        @csrf
        <div class="mb-3">
            <input wire:model="name" class="form-control" name="name" type="text" placeholder="Name">
        </div>

            @error('name')
                <h3 class="text-sm-left small">{{$message}}</h3>
            @enderror

        <div class="mb-3">
            <input wire:model="todolist" class="form-control" name="todolist" type="text" placeholder="Input Todo">
        </div>

            @error('todolist')
                <h3 class="text-sm-left small">{{$message}}</h3>
            @enderror
        <button class="btn btn-primary mt-2" type="submit" wire:loading.remove>Create</button>
        <div align="center" class="loading mt-3 text-secondary" wire:loading>
            <p>Tilililit tililit hawayu...</p> 
        </div>

    </form>
    @if(session('message'))
    <div class="d-flex justify-content-center">
        <div class="alert alert-success text-center mt-3 w-25" >
            <h6 >{{session('message')}} </h6>
        </div>
    </div>
    @endif
    @if(session('alert'))
    <div class="d-flex justify-content-center">
        <div class="alert alert-success text-center mt-3 w-25" >
            <h6 >{{session('alert')}}</h6>
        </div>
    </div>
    @endif

    <table class="table table-striped mt-3 mb-6">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>TODO</th>
                <th>EDIT</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->todo}}</td>
                <td><a class="btn btn-secondary" href="/user/{{$user->id}}">View</a></td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
   
</div>


{{-- adding livewire 3 --}}
@livewire('livewire-component')

</body>
</html>
