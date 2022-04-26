@extends('layouts.app')
@section('title')
ModifierRecruteur
@endsection
@section('contenu')
<?php   
    use Illuminate\Support\Facades\Crypt;
    use Illuminate\Contracts\Encryption\DecryptException;
?>
<div class="container">
  <div class="row">
    <div class="col-md-12 mx-auto mt-5">
      <form action="/SaveRecruteur" method="get">
        <div class="mb-3">
          <label class="form-label">Nom</label>
          <input type="text" class="form-control" id="floatingName" name="name" placeholder="Nom" value="<?php



 echo $recruteur->name ?>">

        </div>
        <div class="mb-3">
          <label class="form-label">Email address</label>
          <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" value="<?php echo $recruteur->email ?>">

        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="text" class="form-control" id="floatingPassword" name="password" placeholder="Password" value="<?php 
                                      try { echo Crypt::decryptString($recruteur->password);
                                    } catch (DecryptException $e) { 
                                      // echo "fouad";
                                    }
                              ?>">
        </div>
        <input type="hidden" class="form-control" name="id" value="<?php echo $recruteur->id ?>">

        <div class="d-grid gap-2">
          <button type="submit" class="btn btn-warning"><i class="fas fa-pencil"></i> Modifier</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection