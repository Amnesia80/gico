<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {



 function __construct()
 {
   parent::__construct();
 }

 function index()
 {
   
   $this->load->helper('url');
   $this->load->helper(array('form'));


    // définition des données variables du template
    $data['title'] = 'Bienvenue sur Gico';
     
    // on charge la view qui contient le corps de la page
    $data['contents'] = 'login_view';

 
    // on charge la page dans le template
    $this->load->view('templates/template', $data);
    //$this->load->view('login_view');
 }



}

?>