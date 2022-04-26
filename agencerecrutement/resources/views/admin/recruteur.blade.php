@extends('layouts.app')
@section('title')
Acceuil
@endsection
@section('contenu')

<div class="row">
  <div class="">
    <div class="d-flex justify-content-between">
      <div class="d-flex align-items-center">
        <h3>Liste des recruteurs</h3>
      </div>

      <div class="my-3 d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{url('AdminAcceuil')}}" class="btn btn-secondary btn-sm"><i class="fas fa-arrow-left"></i> Page pricipale</a>
        <a href="{{url('AjouterRecruteur')}}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Nouveau Recruteur</a>
      </div>
    </div>



    <div class="row-col-8">
      <table class="table table-borderless">
        <thead>
          <tr>
            <th>Nom </th>
            <th>Email </th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($recruteurs as $rec)
          <tr>
            <td>{{$rec->name}}</td>
            <td>{{$rec->email}}</td>
            <td>
              <a href="<?= "ModifierRecruteur?id=" . $rec->id; ?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil"></i></a>
              <a href="<?= "DeleteRecruteur?id=" . $rec->id; ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>





  @endsection