  <div class="container">
        <div class="col-md-4">
          <h2>Connexion</h2>
          <hr class="colorgraph">
             <?php echo validation_errors(); ?>
           <?php echo form_open('verifylogin'); ?>
            <div style="display:none;"><input type="hidden" name="_method" value="POST"></div>        
            <div class="form-group">
              <label class="control-label" for="identifiant">Identifiant</label>
              <input type="text" name="username" id="username" class="form-control">
            </div>        
            <div class="form-group">
              <label class="control-label" for="motdepasse">Mot de passe</label>
              <input type="password" name="password" id="password" class="form-control">
            </div>        
            <div class="submit">
              <input type="submit" class="btn btn-primary" value="Se connecter">
            </div>   
          </form>
          <a href="<?php echo site_url();?>/resetmdp"> Mot de passe oublié ? </a> 
        </div>        
        <div class="col-md-2"> </div>
        <div class="col-md-6"> 
            <h2>Inscription</h2>
            <hr class="colorgraph">
            <p>Cette application permet aux étudiants du Master STIC - ISRI, MIAGE et 2IBS de choisir leurs UE optionnelles</p>
            <p>Pour choisir vos UEs optionnelles vous devez :</p>
            <ol>
                      <li>Vous inscrire et attendre le mail d'activation de votre compte - Vérifiez votre adresse mail!</li>
                      <li>Vous loguer sur le système avec les login/password que vous avez choisis</li>
                      <li>Faire vos choix à chaque semestre</li>
            </ol>
            <p><a href="#"> Pas encore inscrit ? </a></p>
        </div>
    </div>
  </div>

