<?php
Class User extends CI_Model
{
   function login($username, $password)
   {
     $this -> db -> select('id, identifiant, motdepasse, role_id');
     $this -> db -> from('utilisateurs');
     $this -> db -> where('identifiant', $username);
     $this -> db -> where('motdepasse', MD5($password));
     $this -> db -> limit(1);

     $query = $this -> db -> get();

     if($query -> num_rows() == 1)
     {
       return $query->result();
     }
     else
     {
       return false;
     }
   }

  function recover_mdp($mail)
  {
      $this->load->helper('url');
       // mail présent en bdd on reset le mdp
      $id = $this->user->getId($mail);
      $crypt_mdp = $this->user->generate_mdp();
      $updated = $this->user->update_mdp($id,$mail,$crypt_mdp);
      if ($updated == TRUE) {
        //mdp changé en bdd, donc mail avec nouveau mdp
        $this->user->mail_mdp_updated($mail,$crypt_mdp);
        
        ?> <script>alert("<?php echo htmlspecialchars('Vous allez  recevoir votre nouveau mot de passe sur votre adresse e-mail !', ENT_QUOTES); ?>")</script>
      <?php
      // définition des données variables du template
         $data['title'] = 'Bienvenue sur Gico';
         $data['contents'] = 'login_view';
         $this->load->view('templates/template', $data);
         //redirect('login_view', 'refresh');
      }

       //return $query->result();
  }

  function generate_mdp()
  {
  
    $this->load->helper('security');
    $this->load->helper('string');
    $mdp = MD5(random_string('alnum', 12));
    return $mdp;

  }

  function update_mdp($id_user,$mail_user,$new_mdp)
  {
    $data = array(
               'motdepasse' => $new_mdp
            );

    $this->db->where('id', $id_user);
    $this -> db -> where('email', $mail_user);
    $this->db->update('utilisateurs', $data);

    return true;

  }

  function mail_mdp_updated($mail_user,$new_mdp)
  {
    $this->load->library('email');

    $config['smtp_host'] = 'sendmail';
    $config['smtp_user'] = '/usr/sbin/sendmail';
    $config['smtp_pass'] = 'iso-8859-1';
    $config['smtp_port'] = TRUE;

$this->email->initialize($config);

    $message = 'Votre nouveau mot de passe est : '.$new_mdp.' pense à le changer';

    $this->email->from('message@gico.com', 'Gico');
    $this->email->to($mail_user); 
    $this->email->subject('Votre nouveau mot de passe GICO');
    $this->email->message($message);  

    $this->email->send();

    echo $this->email->print_debugger();



  }

  function check_mail($mail)
  {

     $this -> db -> select('id, prenom');
     $this -> db -> from('utilisateurs');
     $this -> db -> where('email', $mail);
     $this -> db -> limit(1);

    // echo $mail;

     $query = $this -> db -> get();

     if($query -> num_rows() == 1)
     {
        return true;
     }
     else
     {
        return false;
     }
  }

  function GetId($email)
  {

     $this -> db -> select('id, identifiant');
     $this -> db -> from('utilisateurs');
     $this -> db -> where('email', $email);
     $this -> db -> limit(1);
     $query = $this -> db -> get();

     if($query -> num_rows() == 1)
     {
       $result = $query->result();
        if($result)
       {
         $sess_array = array();
         foreach($result as $row)
         {           
             $id = $row->id;
         }
         return $id;
       }
     }
     else
     {
       return false;
     }    
  }


}
?>