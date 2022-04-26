@extends('layouts.app')
@section('title')
Liste des Offres
@endsection
@section('contenu')

<div class="row">
  <div class="d-flex justify-content-between">
    <div class="d-flex align-items-center">
      <h3>Liste des offres</h3>
    </div>

    <div class="my-3 d-grid gap-2 d-md-flex justify-content-md-end">
      <a href="{{url('AdminAcceuil')}}" class="btn btn-secondary btn-sm"><i class="fas fa-arrow-left"></i> Page pricipale</a>
    </div>
  </div>

  <div class="row-col-9">
    <table class="table table-borderless">
      <thead>
        <tr>
          <th>Nom d'entreprise</th>
          <th>Domaine</th>
          <th>Poste</th>
          <th>Telephone</th>
          <th>Adresse</th>
          <th>Description</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($offres as $offre)
        <tr>
          <td>{{$offre->nomEntreprise}}</td>
          <td>{{$offre->domaineOffre}}</td>
          <td>{{$offre->posteOffre}}</td>
          <td>{{$offre->telephoneEntreprise}}</td>
          <td>{{$offre->adressEntreprise}}</td>
          <td>{{$offre->descriptionOffre}}</td>
          @php $i = 1 @endphp
          @foreach($affectations as $affect)
            @if($affect->offre_id == $offre->id)
            <td><span class="badge rounded-pill bg-secondary mx-auto">fermé</span></td>
            @php $i = 0 @endphp
            @break
            @endif
          @endforeach
          @if($i == 1)
          <td><span class="badge rounded-pill bg-success mx-auto">non fermé</span></td>
          @endif
          <td><a href="<?= "DeleteOffre?id=" . $offre->id; ?>" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash "></i></a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection