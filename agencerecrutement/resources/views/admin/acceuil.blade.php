@extends('layouts.app')
@section('title')
Acceuil
@endsection
@section('contenu')

<div class="row mt-3">
  <h2 class="text-center m" class="text-uppercase">Gestion de l'application</h2>

  <div class="container">
    <div class="row">
      <div class="col-sm-4 py-2 ">
        <div class="card ">
          <img src=" {{ asset('images/cl.webp')}}" class="card-img-top rounded mt-5 shadow " style="width:346px;height:300px;" alt="...">
          <div class="text-center">
            <small class="text-muted"><a class="btn my-3 abutton btn-primary btn-md" href="/Offre">Gestion des offres</a></small>
          </div>
        </div>
      </div>
      <div class="col-sm-4 py-2 ">
        <div class="card">
          <img src=" {{ asset('images/rec.jpg')}}" class="card-img-top rounded mt-5 shadow" style="width:346px;height:300px;" alt="...">
          <div class=" text-center">
            <small class="text-muted"><a class="btn my-3 abutton btn-primary btn-md" href="/ListRecruteurs">Gestion des recruteurs</a></small>
          </div>
        </div>
      </div>
      <div class="col-sm-4 py-2 ">
        <div class="card">
          <img src=" {{ asset('images/ent.png')}}" class="card-img-top rounded mt-5 shadow " style="width:346px;height:300px;" alt="...">
          <div class=" text-center">
            <small class="text-muted"><a class="btn my-3 abutton btn-primary btn-md" href="/Candidature">Gestion des candidatures</a></small>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection