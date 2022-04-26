<?php

namespace App\Http\Controllers;

use App\Models\Affectation;
use App\Models\Candidature;
use App\Models\Offre;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AffectationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $listOf = Offre::all();
        $listOffre = array();
        $i = 0;
        foreach ($listOf as $offre) {
            $j = 0;
            $listaffec = Affectation::all();
            foreach ($listaffec as $affect) {
                if ($offre->id == $affect->offre_id)  $j = 1;
            }
            if ($j == 0) {
                $listOffre[$i] = $offre;
                $i++;
            }
        }
        return view('affectation.index', ['Offres' => $listOffre]);
    }
    public function Candidat($id)
    {
        $listC = Candidature::all();
        $listCandidature = array();
        $listaffec = Affectation::all();
        $i = 0;
        foreach ($listC as $Candidature) {
            $j = 0;
            $listaffec = Affectation::all();
            foreach ($listaffec as $affect) {
                if ($Candidature->id == $affect->candidature_id)  $j = 1;
            }
            if ($j == 0) {
                $listCandidature[$i] = $Candidature;
                $i++;
            }
        }
        return view('affectation.Candidat', ['Candidatures' => $listCandidature, 'id' => $id]);
    }
    public function affecter($id1, $id2)
    {
        $affectation = new Affectation();
        $affectation->offre_id = $id1;
        $affectation->candidature_id = $id2;
        $affectation->recruteur_id = Auth::user()->id;
        $affectation->save();
        return redirect('Recruteur');
    }
    public function affectations()
    {
        $listaffec = Affectation::all();
        $listoffre[] = new Offre();
        $listCandidature[] = new Candidature();
        foreach ($listaffec as $aff) {
            $listoffre[$aff->id] = Offre::find($aff->offre_id);
            $listCandidature[$aff->id] = Candidature::find($aff->candidature_id);
        }
        return view('affectation.Affectations', [
            'Offres' => $listoffre, 'Candidatures' => $listCandidature,
            'Affectations' => $listaffec
        ]);
    }
    public function telecharger($id)
    {
        $Candidature = Candidature::find($id);
        $path = public_path("images/cvs/$Candidature->cv");
        return response()->download($path);
    }
}
