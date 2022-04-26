@extends('layouts.app')
@section('contenu')
<div class="row">
    <div class="col-md-12 mx-auto mt-5">

        <form action="{{url('offre/store')}}" method="POST" enctype="multipart/form-data">

            {{ csrf_field() }}

            <div class="mb-3" class="form-group">
                <label class="form-label">Entreprise</label>
                <input type="text" class="form-control" name="nomEntreprise">
            </div>

            <div class="mb-3" class="form-group">
                <label class="form-label">Téléphone</label>
                <input type="text" class="form-control" name="telephoneEntreprise">
                {{-- <div class="form-text">Nous ne partagerons jamais votre numéro de téléphone avec quelqu'un d'autre.</div> --}}
            </div>

            <div class="mb-3" class="form-group">
                <label class="form-label">Adresse</label>
                <input type="text" class="form-control" name="adressEntreprise">
            </div>
            
            <div class="mb-3" class="form-group">
                <label class="form-label">Domaine</label>
                <input type="text" class="form-control" name="domaineOffre">
            </div>
    
            <div class="mb-3" class="form-group">
                <label class="form-label">Poste</label>
                <input type="text" class="form-control" name="posteOffre">
            </div>
            
            <div class="mb-4">
                <label class="form-label">Description</label>
                <textarea class="form-control" rows="3" name="descriptionOffre"></textarea>
            </div>
            
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Enregistrer</button>
            </div>
            
        </form>
    </div>
</div>
    
@endsection