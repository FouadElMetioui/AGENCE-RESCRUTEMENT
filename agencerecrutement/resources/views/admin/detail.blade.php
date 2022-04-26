@extends('layouts.app')

@section('titre') Affichage de candidature @endsection


@section('contenu')

<div class="row mt-5">
    <div class="mx-auto mt-5">
        <div class="d-flex justify-content-evenly align-items-center rounded">

            <div class="mx-5 my-3 col-md-5 px-3 py-3">
                <img class="img-fluid rounded" src="{{ asset('images/cvs/' . $candidature->cv) }}">
            </div>

            <div class="d-flex flex-column align-items-center justify-content-center my-5">
                <div class="mx-5">
                    <h5>Nom : {{ $candidature->nomCandidat }} </h5>
                    <h5>Prenom : {{ $candidature->prenomCandidat }} </h5>
                    <h5>Age : {{ $candidature->ageCandidat }} </h5>
                    <h5>Domaine : {{ $candidature->domaineCandidat }}</h5>
                    <h5>Poste : {{ $candidature->posteCandidat }}</h5>
                    <h5>Description : {{ $candidature->descriptionCandidat }}</h5>
                </div>

                <div class="my-2">
                    <form action="{{ url('deletecandidature/'.$candidature->id) }}" method="POST">

                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}

                        <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Supprimer</button>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection