<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offre;
use App\Models\Affectation;


class EntrepriseController extends Controller
{
    public function index()
    {
        $listOffres = Offre::all()->where('entreprise_id', '=', auth()->user()->id);
        $listeAffectations = Affectation::all();
        return view('EntrepriseViews.index', ['offres' => $listOffres,'affectations'=>$listeAffectations]);
    }
    public function create()
    {
             
        return view('EntrepriseViews.create');
    }

    public function store(Request $request)
    {
        $offre = new Offre();

        //     $validated = $request->validate([
        //       'name' => 'required|unique:Articles|max:255|min:4',
        //       'email' => 'required|unique:Articles|max:255',
        //       'age' => 'required',
        //       'password' => 'required|unique:Articles|min:8'
        //   ]);

        // $fileName = time() . '.' . $request->file('image')->extension();

        // $request->image->move(public_path('public'), $fileName);
        // if (!$request->hasFile('image')) {
        //     $artic->image = "missing file";
        // }
        // $offre->image = $request->file('image');

        // $file_extension = $request->file('image')->getClientoriginalExtension();
        // $file_name = time() . '.' . $file_extension;
        // $path = 'images';
        // $request->file('image')->move($path, $file_name);
        
        // // else $offre->image="no file selected";
        $offre->nomEntreprise = $request->input('nomEntreprise');
        $offre->telephoneEntreprise = $request->input('telephoneEntreprise');
        $offre->adressEntreprise = $request->input('adressEntreprise');
        $offre->domaineOffre = $request->input('domaineOffre');
        $offre->posteOffre = $request->input('posteOffre');
        $offre->descriptionOffre= $request->input('descriptionOffre');
        $offre->entreprise_id=auth()->user()->id;
       
        // et pour persister dans la base de donnees on doit faie 
        $offre->save();
        session()->flash('success', 'an new Offre added with succes !! ');
        return redirect('/entreprise');

    }
    public function edit($id)
    {
        $Offres = Offre::find($id);
        return view('EntrepriseViews.edit', ['offre' => $Offres]);
    }

    public function update($id, Request $request)
    {
        $offre = Offre::find($id);
        $offre->nomEntreprise = $request->input('nomEntreprise');
        $offre->telephoneEntreprise = $request->input('telephoneEntreprise');
        $offre->adressEntreprise = $request->input('adressEntreprise');
        $offre->domaineOffre = $request->input('domaineOffre');
        $offre->posteOffre = $request->input('posteOffre');
        $offre->descriptionOffre= $request->input('descriptionOffre');

        $offre->save();
        return redirect('entreprise');
    }
    public function destroy(Request $request, $id)
    {
        $offre = Offre::find($id);
        $offre->delete();
        return redirect('entreprise');
    }
   
}
