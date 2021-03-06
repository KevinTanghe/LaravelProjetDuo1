@extends('templates/backTemp')
@section('content')
    <h1>Home</h1>
    <table class="table">
        <thead>
            <tr class="">
                <th scope="col">Id</th>
                <th scope="col">Titre</th>
                <th scope="col">Create_at</th>
                <th scope="col">Update_at</th>
                <th scope="col"></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($secondHome as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->titre }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->updated_at }}</td>
                    <td><a href="/edit-liHome/{{$item->id}}" class="btn btn-success">Edit</a></td>
                    <td>
                        <form action="/delete-lihome/{{$item->id}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">DELETE</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="container">
        <form action="/back-Store-lihome" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">LI à ajouter</label>
                <input type="text" name="titre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection