@extends('templates/backTemp')
@section('content')
<table class="table">
    <h1>CardArticle</h1>
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Titre</th>
            <th scope="col">Chiffre</th>
            <th scope="col">SousTitre</th>
            <th scope="col">Content</th>
            <th scope="col">Create_at</th>
            <th scope="col">Update_at</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <th scope="row">{{ $show->id }}</th>
                <td>{{ $show->titre }}</td>
                <td>{{ $show->chiffre }}</td>
                <td>{{ $show->sousTitre }}</td>
                <td>{{ $show->content }}</td>
                <td>{{ $show->created_at }}</td>
                <td>{{ $show->updated_at }}</td>
            </tr>
    </tbody>
</table>
@endsection
