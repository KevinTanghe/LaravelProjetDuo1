@extends('templates/backTemp')
@section('content')
<div class="container">
    <form action="/update-card/{{$edit->id}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Titre</label>
            <input type="text" name="titre" value="{{$edit->titre}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <label for="exampleInputEmail1">Chiffre</label>
            <input type="text" name="chiffre" value="{{$edit->chiffre}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <label for="exampleInputEmail1">SousTitre</label>
            <input type="text" name="sousTitre" value="{{$edit->sousTitre}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <label for="exampleInputEmail1">content</label>
            <input type="text" name="content" value="{{$edit->content}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection