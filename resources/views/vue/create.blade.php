@extends('base')

@section('title', 'Les étudiants')

@section('content')
<a href="{{ route('vue.index') }}"><button class="btn btn-primary mb-3">Retour</button></a>
    <h1>Nouveau Etudiant</h1>
    @include('vue.form')
@endsection
    