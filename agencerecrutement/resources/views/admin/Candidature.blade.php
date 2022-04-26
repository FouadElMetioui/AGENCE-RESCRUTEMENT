@extends('layouts.app')
@section('title')
Liste Candidature
@endsection
@section('contenu')
<div class="row">
  <div class="d-flex justify-content-between">
    <div class="d-flex align-items-center">
      <h3>Liste des candidatures</h3>
    </div>

    <div class="my-3 d-grid gap-2 d-md-flex justify-content-md-end">
      <a href="{{url('AdminAcceuil')}}" class="btn btn-secondary btn-sm"><i class="fas fa-arrow-left"></i> Page pricipale</a>
    </div>
  </div>

  <div class="row-col-9">
    <table class="table table-borderless">
      <thead>
        <tr>
          <th>Nom </th>
          <th>Prenom </th>
          <th>Age</th>
          <th>Telephone</th>
          <th>Poste</th>
          <th>Domaine</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($candidatures as $candidat)
        <tr>
          <td>{{$candidat->nomCandidat}}</td>
          <td>{{$candidat->prenomCandidat}}</td>
          <td>{{ $candidat->ageCandidat}}</td>
          <td>{{$candidat->telephoneCandidat}}</td>
          <td>{{$candidat->domaineCandidat}}</td>
          <td>{{$candidat->posteCandidat}}</td>
          @php $i = 1 @endphp
          @foreach($affectations as $affect)
            @if($affect->candidature_id == $candidat->id)
            <td><span class="badge rounded-pill bg-secondary mx-auto">affecté</span></td>
            @php $i = 0 @endphp
            @break
            @endif
          @endforeach
          @if($i == 1)
          <td><span class="badge rounded-pill bg-success mx-auto">non affecté</span></td>
          @endif
          <td>
            <a href="{{ url('admincandidature/'.$candidat->id) }}" class="btn btn-primary btn-sm "><i class="fas fa-circle-info"></i></a>
            <a href="<?= "DeleteCandidature?id=" . $candidat->id; ?>" class="btn btn-danger btn-sm "><i class="fas fa-trash "></i></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>



@endsection