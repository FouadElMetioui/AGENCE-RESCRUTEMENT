<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Offre;
use App\Models\Candidature;
use App\Models\Affectation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Redirect;
 
class ControllerAdmin extends Controller
{
    //-----------------------------------Recruteur-----------------------------------
    public function ListRecruteurs(){
       
        $rec=new User();
        $recs=$rec::where('role_id',2)->get();
      return view("admin.recruteur", ['recruteurs'=>$recs]);
}
public function ModifierRecruteur(Request $request){
    $id=$request['id'];
    $rec=new User();
    $re=$rec::where('id',$id)->first();
      return view('admin.ModifierRecruteur',['recruteur'=>$re]);
  }
public function SaveRecruteur(Request $request){
    $nom= $request['name'];
    $email= $request['email'];
    $password= $request['password'];
    $rec = new User();
    $re=$rec::find($request['id']);
    $re->name=$nom;
    $re->email=$email;
    $re->password = \bcrypt($password);
    $re->save();
    return Redirect::route('ListRecruteurs');
}
public function AjouterRecruteur(){
  return view("admin.AjouterRecruteur");
}
public function SaveAjouterRecruteur(Request $request){
 $nom= $request['name'];
 $email= $request['email'];
 $password= $request['password'];
 $rec = new User();
 $rec->name=$nom;
 $rec->email=$email;
 $rec->password = \bcrypt($password);
 $rec->role_id=2;
 $rec->admin_id=1;
$rec->save();
return Redirect::route('ListRecruteurs');
}
public function DeleteRecruteur(Request $request){
    $id =  $request['id'];
    $rec = new User();
    $rec->find($id)->delete();
    return Redirect::route('ListRecruteurs');
}

//--------------------------------Entreprise------------------------------
public function Offre(){
       
    $offre=new Offre();
    $offres=$offre::all();
    $affectations = Affectation::all();
  return view("admin.Offre", ['offres'=>$offres , 'affectations'=>$affectations] );
 
}
public function DeleteOffre(Request $request){
    $id =  $request['id'];
    $offre = new Offre();
    $offre->find($id)->delete();
    return Redirect::route('ListOffre');
}

//-------------------------------Candidature---------------------------------------
public function Candidature(){
    $candidature=new Candidature();
    $candidatures=$candidature::all();
    $affectations = Affectation::all();
  return view("admin.Candidature",['candidatures'=>$candidatures,'affectations'=>$affectations]);
}
public function DeleteCandidature(Request $request){
    $id =  $request['id'];
    $candidature = new Candidature();
    $candidature->find($id)->delete();
    return Redirect::route('ListCandidature');
}
public function getOne($id){
  $candidature = Candidature::find($id);
  return view("admin.detail",['candidature'=>$candidature]);
}
}
