<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ResetMdp extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);
 }

 function index()
 {
        $data['contents'] = 'welcome_message';
    $this->load->view('templates/template', $data);
   //This method will have the credentials validation
   $this->load->library('form_validation');
   $this->form_validation->set_rules('email', 'email', 'required|valid_email|callback_check_database');
   
   if($this->form_validation->run() == FALSE)
   {
    // définition des données variables du template
    $data['title'] = 'Nouveau mot de passe';
     
    // on charge la view qui contient le corps de la page
    $data['contents'] = 'reset_view';
    $this->load->view('templates/template', $data);
   }
   else
   {
     //Go to private area
     //redirect('login', 'refresh');
    $email =$this->input->post('email');
     $this->user->recover_mdp($email);
    
   }

 }

 function check_database($mail)
 {

    $result = $this->user->check_mail($mail);
   //Field validation succeeded.  Validate against database
   if($result)
   {
     return TRUE;
   }
   else
   {

     $this->form_validation->set_message('check_database','Adresse e-mail inconnue !');
     return false;
   }
 }
}
?>