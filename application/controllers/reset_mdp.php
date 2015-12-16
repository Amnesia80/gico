 <?php
    // définition des données variables du template
    $data['title'] = 'Mot de passé oublié?';
     
    // on charge la view qui contient le corps de la page
    $data['contents'] = 'reset_view';

 
    // on charge la page dans le template
    $this->load->view('templates/template', $data);

    ?>