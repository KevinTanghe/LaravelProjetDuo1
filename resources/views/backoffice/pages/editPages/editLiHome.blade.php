@extends('templates/backTemp')
@section('content')
<div class="container">
    <form action="/update-lihome/{{$edit->id}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Nom du li</label>
            <input type="text" name="titre" value="{{$edit->titre}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection