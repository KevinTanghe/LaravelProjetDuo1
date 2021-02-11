@extends('templates/backTemp')
@section('content')
    <table class="table">
        <h1>CardArticle</h1>
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Titre</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($card as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->titre }}</td>
                    <td>
                        <form action="/delete-card/{{$item->id}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">DELETE</button>
                        </form>
                    </td>
                    <td><a class="btn btn-success" href="/card-show/{{$item->id}}">Show</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="container">
        <form action="/back-Store-card" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Titre</label>
                <input type="text" name="titre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <label for="exampleInputEmail1">Chiffre</label>
                <input type="text" name="chiffre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <label for="exampleInputEmail1">SousTitre</label>
                <input type="text" name="sousTitre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <label for="exampleInputEmail1">content</label>
                <input type="text" name="content" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection