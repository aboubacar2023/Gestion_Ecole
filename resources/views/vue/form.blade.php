<form action="" method="post">
    @csrf
    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" class="form-control" name="nom" value="{{$etudiant->nom}}">
    </div>
    <div class="form-group">
        <label for="prenom">Prenom</label>
        <input type="text" class="form-control" name="prenom" value="{{$etudiant->prenom}}">
    </div>
    <div class="form-group">
        <label for="filiere">Filière</label>
        <input type="text" class="form-control" name="filiere" value="{{$etudiant->filiere}}">
    </div>
    <div class="form-group">
        <label for="age">Age</label>
        <input type="number" class="form-control" name="age" value="{{$etudiant->age}}">
    </div>
    <button class="btn btn-primary mt-3 col-12">
        @if ($etudiant->id)
            Modifier
            @else
            Créer
        @endif
    </button>
</form>