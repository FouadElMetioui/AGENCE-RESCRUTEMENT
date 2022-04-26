@extends('layouts.app')

@section('contenu')

<div class="row">
  <div class="d-flex justify-content-between">
    <div class="d-flex align-items-center">
      <h3>Liste des offres</h3>
    </div>

    <div class="my-3 d-grid gap-2 d-md-flex justify-content-md-end">
      <a class="btn btn-primary btn-sm" href="/affectations">Listes des Affectations</a>
    </div>
  </div>
  <div class="row-col-9">
    <table class="table table-borderless">
      <thead>
        <tr>
          <th scope="col">Nom d'Entreprise</th>
          <th scope="col">Poste</th>
          <th scope="col">Domaine</th>
          <th scope="col">Telephone</th>
          <th scope="col">Address</th>
          <th scope="col">Description</th>
          <th scope="col">Action</th>
        </tr>
      </thead>

      <tbody>
        @foreach($Offres as $Offre)
        <tr>
          <td>{{$Offre->nomEntreprise}}</td>
          <td>{{$Offre-> posteOffre}}</td>
          <td>{{$Offre-> domaineOffre }}</td>
          <td>{{$Offre->telephoneEntreprise}}</td>
          <td>{{$Offre-> adressEntreprise}}</td>
          <td>{{$Offre->descriptionOffre}}</td>
          <td>
            <a href="{{ url('Candidats/'.$Offre->id)}}" class="btn btn-success"><i class="fas fa-user"></i> choisir un profil</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection