  <div class="container">
        <div class="col-md-4">
          <h2>Nouveau mot de passe</h2>
          <hr class="colorgraph">
             <?php echo validation_errors(); ?>
           <?php echo form_open('resetmdp'); ?>
            <div style="display:none;"><input type="hidden" name="_method" value="POST"></div>        
            <div class="form-group">
              <label class="control-label" for="email">Adresse e-mail</label>
              <input type="text" name="email" id="email" class="form-control">
            </div>        
     
            <div class="submit">
              <input type="submit" class="btn btn-primary" value="Envoyer">
            </div>   
          </form>
        </div>        
        <div class="col-md-2"> </div>
        <div class="col-md-6"> 
            <h2>Important</h2>
            <hr class="colorgraph">
            <p>Le mot de passe que vous allez recevoir est <B>géneré automatiquement</B> par notre serveur, 
            pour une question de sécurité, pensez à <b>le mettre à jour</b> après votre connection </p>
            <p><a href="#"> Pas encore inscrit ? </a></p>
        </div>
    </div>
  </div>