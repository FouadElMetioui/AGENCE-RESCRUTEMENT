@extends('layouts.app')

@section('titre') Modification de candidature @endsection


@section('contenu')

<div class="row">
    <div class="col-md-12 mx-auto mt-5">
        <form action="{{ url('/candidature/update/'.$candidature->id ) }}" method="POST" enctype="multipart/form-data">

            <input type="hidden" name="_method" value="PUT">    
            {{ csrf_field() }}

            <div class="mb-3">
                <label class="form-label">Nom</label>
                <input type="text" class="form-control" name="nomCandidat" value="{{ $candidature->nomCandidat }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Prenom</label>
                <input type="text" class="form-control" name="prenomCandidat" value="{{ $candidature->prenomCandidat }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Domaine de Travail</label>
                <input type="text" class="form-control" name="domaineCandidat" value="{{ $candidature->domaineCandidat }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Poste</label>
                <input type="test" class="form-control" name="posteCandidat" value="{{ $candidature->posteCandidat }}">
                <div class="form-text">Poste vous souhaitez avoir.</div>
            </div>

            <div class="mb-3">
                <label class="form-label">Numéro de Téléphone</label>
                <input type="test" class="form-control" name="telephoneCandidat" value="{{ $candidature->telephoneCandidat }}">
                <div class="form-text">Nous ne partagerons jamais votre numéro de téléphone avec quelqu'un d'autre.</div>
            </div>

            <div class="mb-3">
                <label class="form-label">Age</label>
                <input type="number" class="form-control" name="ageCandidat" value="{{ $candidature->ageCandidat }}">
            </div>

            <div class="form-group mb-3">
                <label class="form-label">Cv format jpg</label>
                <input type="file" class="form-control" name="cv" value="{{ $candidature->cv }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" rows="3" name="descriptionCandidat" value="{{ $candidature->descriptionCandidat }}"></textarea>
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-warning"><i class="fas fa-pencil"></i> Modifier</button>
            </div>
            
        </form>
    </div>
</div>
    

@endsection