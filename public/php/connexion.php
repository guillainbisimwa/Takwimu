<?php 
 	require("../includes/config.php"); 

	if($_POST['login'] != null and $_POST['password'] != null )
  	{
  		$login = htmlentities(trim($_POST['login'])) ;
  		$password = htmlentities(trim($_POST['password'])) ;
  	 	if(query("SELECT * FROM  ") === false)
       {
           echo" <p  class='err_enr'>une erreure est surnenue lors de l'envoi des données.<br> "; 
       }
       else echo" <p  class='reus_enr'>Merci $nom  $prenom de nous avoir ecrit<br> ";
  /*<button id='reinitialiser' class='btn btn-success btn-sm' data-dismiss='modal' Onclick='javascript:window.refresh()'>Cliquer ici pour continuer</button>
  </p>";*/
              
  }
  else
   echo" <p  class='err_enr'> une erreure est surnenue lors de l'envoi des données...<br> "; 


?>