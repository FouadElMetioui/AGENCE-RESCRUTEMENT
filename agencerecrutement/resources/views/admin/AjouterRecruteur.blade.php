@extends('layouts.app')
@section('title')
Ajouter Recruteur
@endsection
@section('contenu')
<div class="container">
    <div class="row">
        <div class="col-md-12 mx-auto mt-5">
            <form action="/SaveAjouterRecruteur" method="get">
                <div class="mb-3">
                    <label class="form-label">Nom</label>
                    <input type="text" class="form-control" name="name">
                </div>

                <div class="mb-3">
                    <label class="form-label">email</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label class="form-label">password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Enregistrer</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection