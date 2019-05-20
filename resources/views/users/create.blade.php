@extends("layout.index")
@section("content")
<div class="content">
    <div class="row">
      <div class="col-12">
<form>
  <div class="form-group">
    <label for="text">nom</label> 
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fa fa-address-card"></i>
        </div>
      </div> 
      <input id="text" name="text" placeholder="nom d'utilisateur" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label for="text">prenom</label> 
    <input id="text" name="text" placeholder="votre prenom" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label for="text2">e-mail</label> 
    <input id="text2" name="text2" placeholder="nom@prenom.com" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label for="text">password</label> 
    <input id="text" name="text" placeholder="votre mot de passe" type="text" aria-describedby="textHelpBlock" class="form-control"> 
    <span id="textHelpBlock" class="form-text text-muted">mettez un mot de passe alphanumérique!!</span>
  </div>
  <div class="form-group">
    <label for="village">village</label> 
    <div>
      <select id="village" name="village" class="custom-select">
        <option value="fouta">Fouta</option>
        <option value="Ngay">Ngay</option>
        <option value="Guereo">Guereo</option>
        <option value="Diolof">diolof</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="textarea">evaluer Sen Forage</label> 
    <textarea id="textarea" name="textarea" cols="40" rows="5" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label>veuillez renseigner votre rôles !!!</label> 
    <div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="checkbox" id="checkbox_0" type="checkbox" class="custom-control-input" value="client" checked="checked"> 
        <label for="checkbox_0" class="custom-control-label">client</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="checkbox" id="checkbox_1" type="checkbox" class="custom-control-input" value="gestionnaire"> 
        <label for="checkbox_1" class="custom-control-label">gestionnaire</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="checkbox" id="checkbox_2" type="checkbox" class="custom-control-input" value="comptable"> 
        <label for="checkbox_2" class="custom-control-label">comptable</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="checkbox" id="checkbox_3" type="checkbox" class="custom-control-input" value="contrôleur"> 
        <label for="checkbox_3" class="custom-control-label">contrôleur</label>
      </div>
    </div>
  </div> 
  <div class="form-group">
    <button name="submit" type="submit" class="btn btn-primary">soumettre la demande</button>
  </div>
</form>
</div>
</div>
</div>
@endsection
