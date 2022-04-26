@extends('layouts.app')

@section('contenu')
<div class="row">
  <div class="d-flex justify-content-between">
    <div class="d-flex align-items-center">
      <h3>Liste des candidatures</h3>
    </div>

    <div class="my-3 d-grid gap-2 d-md-flex justify-content-md-end">
      <a href="{{url('Recruteur')}}" class="btn btn-secondary btn-sm"><i class="fas fa-arrow-left"></i> Page pricipale</a>
      <a class="btn btn-primary btn-sm" href="/Recruteur">Listes des Offres</a>
    </div>
  </div>
  <div class="row-col-9">
    <table class="table table-borderless">
      <thead>
        <tr>
          <th scope="col">Nom </th>
          <th scope="col">Prenom</th>
          <th scope="col">Age</th>
          <th scope="col">Telephone</th>
          <th scope="col">Poste</th>
          <th scope="col">Description</th>
          <th scope="col">Cv</th>
          <th scope="col">Action</th>
        </tr>
      </thead>

      <tbody>
        @foreach($Candidatures as $Candidature)
        <tr>
          <td>{{$Candidature->nomCandidat}}</td>
          <td>{{$Candidature->prenomCandidat}}</td>
          <td>{{$Candidature-> ageCandidat}}</td>
          <td>{{$Candidature-> telephoneCandidat }}</td>
          <td>{{$Candidature-> posteCandidat}}</td>
          <td>{{$Candidature->descriptionCandidat}}</td>
          <td><a href="{{ url('telecharger/'.$Candidature->id)}}">Telecharger</a></td>

          <td>
            <form action="{{ url('Affecter/'.$id.'/'.$Candidature->id)}}" method="POST">
              {{csrf_field()}}
              <button type="submit" class="btn btn-success">affecter ce profil</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</div>
</div>

@endsection