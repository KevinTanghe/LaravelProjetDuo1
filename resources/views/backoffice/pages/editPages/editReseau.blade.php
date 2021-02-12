@extends('templates/backTemp')
@section('content')
<div class="container">
    <form action="/update-reseau/{{$edit->id}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Nom du reseau</label>
            <input type="text" name="Reseaux" value="{{$edit->Reseaux}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
