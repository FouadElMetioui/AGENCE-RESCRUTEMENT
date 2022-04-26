@extends('layouts.app')
@section('contenu')
<div class="row">
    <div class="">
        <div class="d-flex justify-content-between">
            <div class="d-flex align-items-center">
                <h3>Liste des offres</h3>
            </div>

            <div class="my-3 d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="{{url('offre/create')}}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Nouveau Offre</a>
            </div>
        </div>

        <div class="col-12 table-responisve">
            <table class="table table-borderless">
                <tr>
                    <th scope="col-sm">Entreprise</th>
                    <th scope="col-sm">Telephone</th>
                    <th scope="col-sm">Adresse</th>
                    <th scope="col-sm">Domaine</th>
                    <th scope="col-sm">Poste</th>
                    <th scope="col-sm"> Designation</th>
                    <th scope="col-sm">Status</th>
                    <th scope="col-sm">Action</th>

                </tr>

                @foreach($offres as $offre)
                <tr>
                    <td>{{$offre->nomEntreprise}}</td>
                    <td>{{$offre->telephoneEntreprise}}</td>
                    <td>{{$offre->adressEntreprise}}</td>
                    <td>{{$offre->domaineOffre}}</td>
                    <td>{{$offre->posteOffre}}</td>
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
                    <td>
                        <div class="">
                            <form action="{{ url('offre/'.$offre->id) }}" method="get" class="">
                                {{ method_field('DELETE') }}
                                {{-- <a href="{{url('details/'.$categorie->id)}}" class="btn btn-primary">visualiser</a> --}}
                                @foreach($affectations as $affect)
                                    @if($affect->offre_id == $offre->id)
                                        <button class="btn btn-warning btn-sm " disabled><i class="fas fa-pencil"></i></button>
                                        <button type="submit" class="btn btn-danger btn-sm" disabled><i class="fas fa-trash"></i></button>
                                        @php $i = 0 @endphp
                                        @break
                                    @endif
                                @endforeach
                                @if($i == 1)
                                <a href="{{url('offre/'.$offre->id.'/edit')}}" class="btn btn-warning btn-sm"><i class="fas fa-pencil"></i></a>
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                @endif
                                
                                
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection