@extends('layouts.app')
@section('contenu')
<div class="container">
    <div class="row">
        <div class="col-md-12 mx-auto mt-5">
        <form action="{{url('/offre/'.$offre->id)}}" method="post">
            {{csrf_field()}}
            <div class="mb-3">   
                <label class="form-label">Nom Entreprise</label>
                <input type="text" name ="nomEntreprise" class="form-control" value="{{ $offre->nomEntreprise }}">
            </div>
            
            <div class="mb-3">   
                <label class="form-label">Telephone</label>
                <input type="text" name ="telephoneEntreprise" class="form-control" value="{{ $offre->telephoneEntreprise }}">
            </div>

            <div class="mb-3">   
                <label class="form-label">Adresse</label>
                <input type="text" name ="adressEntreprise" class="form-control" value="{{ $offre->adressEntreprise }}">
            </div>
            
            <div class="mb-3">   
                <label class="form-label">Domaine</label>
                <input type="text" name ="domaineOffre" class="form-control" value="{{ $offre->domaineOffre }}">
            </div>

            <div class="mb-3">   
                <label class="form-label">Poste</label>
                <input type="text" name ="posteOffre" class="form-control" value="{{ $offre->posteOffre }}">
            </div>

            <div class="mb-4">
                <label class="form-label">Description</label>
                <textarea class="form-control" rows="3" name="descriptionOffre" value="{{ $offre->descriptionOffre }}"></textarea>
            </div>
            
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-warning"><i class="fas fa-pencil"></i> Modifier</button>
            </div>
        </form>
       
        </div>
    </div>
</div>

@endsection