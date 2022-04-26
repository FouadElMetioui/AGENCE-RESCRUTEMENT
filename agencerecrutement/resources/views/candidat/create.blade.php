@extends('layouts.app')

@section('titre') Création de candidature @endsection

@section('contenu')

<div class="row">
    <div class="col-md-12 mx-auto mt-5">
        <form action="{{ url('/candidature') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="mb-3">
                <label class="form-label">Nom</label>
                <input type="text" class="form-control" name="nomCandidat">
            </div>

            <div class="mb-3">
                <label class="form-label">Prenom</label>
                <input type="text" class="form-control" name="prenomCandidat">
            </div>

            <div class="mb-3">
                <label class="form-label">Domaine de Travail</label>
                <input type="text" class="form-control" name="domaineCandidat">
            </div>

            <div class="mb-3">
                <label class="form-label">Poste</label>
                <input type="test" class="form-control" name="posteCandidat">
                <div class="form-text">Poste vous souhaitez avoir.</div>
            </div>

            <div class="mb-3">
                <label class="form-label">Numéro de Téléphone</label>
                <input type="test" class="form-control" name="telephoneCandidat">
                <div class="form-text">Nous ne partagerons jamais votre numéro de téléphone avec quelqu'un d'autre.</div>
            </div>

            <div class="mb-3">
                <label class="form-label">Age</label>
                <input type="number" class="form-control" name="ageCandidat">
            </div>

            <div class="form-group mb-3">
                <label class="form-label">Cv format jpg</label>
                <input type="file" class="form-control" name="cv">
            </div>

            <div class="mb-4">
                <label class="form-label">Description</label>
                <textarea class="form-control" rows="3" name="descriptionCandidat"></textarea>
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Enregistrer</button>
            </div>
            
        </form>
    </div>
</div>

@endsection