<?php
    // définition des données variables du template
    $data['title'] = 'Bienvenue sur Gico';
     
    // on charge la view qui contient le corps de la page
    $data['contents'] = 'dashboard';

 
    // on charge la page dans le template
    $this->load->view('templates/template', $data);
 ?>