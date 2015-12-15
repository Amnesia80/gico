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
}
?>