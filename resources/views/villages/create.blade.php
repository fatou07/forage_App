@extends("layout.index")
@section("content")

<div class="content">
        <div class="row">
          <div class="col-12">
        
                <div class="card">
                        <div class="card-body">
                          <form>
                            <div class="form-row">
                                    <div class="form-group">
                                            <label for="inputNom">Nom</label>
                                            <input type="text" class="form-control" id="inputNom" placeholder="votre nom">
                                          </div>
                                          <div class="form-group">
                                                <label for="inputPrenom">Prenom</label>
                                                <input type="text" class="form-control" id="inputPrenom" placeholder="votre prenom">
                                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputPassword4">Password</label>
                                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="inputAddress">Addresse</label>
                              <input type="text" class="form-control" id="inputAddress" placeholder="votre Addresse">
                            </div>
                            <div class="form-group">
                              <label for="inputTélephone">Télephone</label>
                              <input type="text" class="form-control" id="inputTélephone" placeholder="votre numero de telephone">
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputCity">Village</label>
                                <input type="text" class="form-control" id="inputCity">
                              </div>
                              <div class="form-group col-md-4">
                                <label for="inputState">Statue</label>
                                <select id="inputState" class="form-control">
                                  <option selected>Choose</option>
                                  <option>Salariés</option>
                                  <option>Non salariés</option>
                                 
                                </select>
                              </div>
                              <div class="form-group col-md-2">
                                <label for="inputZip">Code Postale</label>
                                <input type="text" class="form-control" id="inputZip">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="">
                                    Check me out
                                    <span class="form-check-sign">
                                      <span class="check"></span>
                                    </span>
                                </label>
                              </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Sign in</button>
                          </form>
                        </div>
                      </div>
        </div>
    </div>
</div>

      
      @endsection
