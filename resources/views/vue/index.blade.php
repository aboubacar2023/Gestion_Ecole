@extends('base')

@section('title', 'Les étudiants')

@section('content')
    <a href="{{ route('vue.create') }}"><button class="btn btn-primary mb-3">Nouveau</button></a>
    <h1>Liste des étudiants</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Filière</th>
            <th scope="col">Age</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        @foreach ($etudiants as $etudiant)
        <tbody>
          <tr>
            <th scope="row">{{$etudiant->id}}</th>
            <td>{{$etudiant->nom}}</td>
            <td>{{$etudiant->prenom}}</td>
            <td>{{$etudiant->filiere}}</td>
            <td>{{$etudiant->age}}</td>
            <td>
                <a href="{{route('vue.edit',$etudiant->id )}}"><button class="btn btn-warning">Modifier</button></a>
                <button class="btn btn-danger">Supprimer</button>
            </td>
          </tr>
        </tbody>
        @endforeach
      </table>
@endsection
    