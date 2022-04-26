@extends('layouts.app')

@section('contenu')

<div class="row">
  <div class="d-flex justify-content-between">
    <div class="d-flex align-items-center">
      <h3>Liste des affectations</h3>
    </div>

    <div class="my-3 d-grid gap-2 d-md-flex justify-content-md-end">
      <a href="{{url('Recruteur')}}" class="btn btn-secondary btn-sm"><i class="fas fa-arrow-left"></i> Page pricipale</a>
    </div>
  </div>
  <div class="row-col-9">
    <table class="table table-borderless">
      <thead>
        <tr>
          <th scope="col">Poste</th>
          <th scope="col">Domaine</th>
          <th scope="col">Enptreprise</th>
          <th scope="col">Candidat</th>
          <th scope="col">Cv</th>
        </tr>
      </thead>

      <tbody>
        @foreach($Affectations as $Affectation)
        <tr>
          <td>{{$Offres[$Affectation->id]->posteOffre}}</td>
          <td>{{$Offres[$Affectation->id]-> domaineOffre }}</td>
          <td>{{$Offres[$Affectation->id]->nomEntreprise}}</td>

          <td>{{$Candidatures[$Affectation->id]->nomCandidat." ".$Candidatures[$Affectation->id]->prenomCandidat}}</td>
          <td> <a href="telecharger/{{$Candidatures[$Affectation->id]->id}}">Telecharger</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection