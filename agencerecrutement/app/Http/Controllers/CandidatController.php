<?php

namespace App\Http\Controllers;

use App\Models\Candidature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CandidatController extends Controller
{
    public function index($id)
    {
        $candidature = DB::table('candidatures')->where('candidat_id', $id)->first();
        return \view('candidat.show', ['candidature' => $candidature]);
    }  
    public function create()
    {
        return \view('candidat.create');
    }
    public function store(Request $request)
    {
        # Enregistrement de l'image dans le dossier public/images/cvs
        $image_extension = $request['cv']->getClientOriginalExtension();
        $image_nom = time() . "." . $image_extension;
        $path = 'images/cvs';
        $request['cv']->move($path, $image_nom);

        $candidature = new Candidature();
        $candidature->nomCandidat = $request['nomCandidat'];
        $candidature->prenomCandidat = $request['prenomCandidat'];
        $candidature->ageCandidat = $request['ageCandidat'];
        $candidature->telephoneCandidat = $request['telephoneCandidat'];
        $candidature->domaineCandidat = $request['domaineCandidat'];
        $candidature->posteCandidat = $request['posteCandidat'];
        $candidature->descriptionCandidat = $request['descriptionCandidat'];
        $candidature->cv = $image_nom;
        $candidature->candidat_id = Auth::user()->id;

        $candidature->save();        
        return \redirect('candidature/'.$candidature->candidat_id);
    }
    public function edit($id)
    {
        $candidature = DB::table('candidatures')->where('candidat_id', $id)->first();
        return \view('candidat.edit', ['candidature' => $candidature]);
    }
    public function update($id, Request $request)
    {
        # Enregistrement de l'image dans le dossier public/images/cvs

        $image_extension = $request['cv']->getClientOriginalExtension();
        $image_nom = time() . "." . $image_extension;
        $path = 'images/cvs';
        $request['cv']->move($path, $image_nom);

        $candidature = Candidature::find($id);
        $candidature->nomCandidat = $request['nomCandidat'];
        $candidature->prenomCandidat = $request['prenomCandidat'];
        $candidature->ageCandidat = $request['ageCandidat'];
        $candidature->telephoneCandidat = $request['telephoneCandidat'];
        $candidature->domaineCandidat = $request['domaineCandidat'];
        $candidature->posteCandidat = $request['posteCandidat'];
        $candidature->descriptionCandidat = $request['descriptionCandidat'];
        $candidature->cv = $image_nom;

        $candidature->save();
        return \redirect('candidature/'.$candidature->candidat_id);
    }
    public function destroy($id)
    {
        $candidature = Candidature::find($id);
        $candidature->delete();
        return \view('candidat.create');
    }
}
