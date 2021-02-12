@extends('templates/backTemp')
@section('content')
    <h1>Reseau</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Reseaux</th>
                <th scope="col">Create_at</th>
                <th scope="col">Update_at</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reseau as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->Reseaux }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->updated_at }}</td>
                    <td><a href="/edit-reseau/{{$item->id}}" class="btn btn-success">Edit</a></td>
                    <td>
                        <form action="/delete-reseau/{{$item->id}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">DELETE</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="container">
        <form action="/back-Store-reseau" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Reseau à ajouter</label>
                <input type="text" name="reseau" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
