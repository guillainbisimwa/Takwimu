<?php

	
    // configuration
    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $data['file'] = $_FILES;
        $data['text'] = $_POST;

    
   
    $obj = $data['text'];
    $nom_user="";
    $prenom_user = ""; 
    $password_user= ""; 
    $adress_user= ""; 
    $phone= "";
    $type= "";
	$paroisse = "";
    $arra = (array)($obj);
    $i = "";
    foreach ($arra as $key2 => $value) {
        
        if ($key2 == "nom_user") {
            $nom_user = htmlentities(trim($value));
        }
        if ($key2 == "prenom_user") {
            $prenom_user = htmlentities(trim($value));
        }
        if ($key2 == "password_user") {
            $password_user = htmlentities(trim($value));
        }
        if ($key2 == "adress_user") {
            $adress_user = htmlentities(trim($value));
        }
        if ($key2 == "phone") {
            $phone = htmlentities(trim($value));
        }
        if ($key2 == "type") {
            $type = htmlentities(trim($value));
        }
		 if ($key2 == "paroisse") {
            $paroisse = htmlentities(trim($value));
        }
        //$i = $i."-".$value." -";
        
    }
      //apologize($i);
    $obj2 = $data['file']['image'];
 
    $tmp_name = "";
    $name = "";
    $arra2 = (array)($obj2);
    foreach ($arra2 as $key => $value2) {
        //echo $key." =>". $value2 ." \n";

        if ($key == "tmp_name") {
            $tmp_name = $value2;
        }
        elseif ($key == "name") {
            $name = $value2;
        }
    }
    //echo $i .$tmp_name." = ".$name; //nom_user prenom_user password_user adress_user phone type
        if (empty($nom_user))
        {
           apologize("Veiller taper le nom svp.");
             
        }
       
        else if (empty($prenom_user))
        {
            apologize("Veiller taper le prenom SVP.");
            
        }
        else if (empty($password_user))
        {
            apologize("Veiller taper le mots de passe SVP.");
             
        }
        else if (empty($adress_user))
        {
            apologize("Veiller taper l'adresse SVP.");
            
        }
        else if (empty($phone))
        {
            apologize("Veiller taper le numero de telephone SVP");
           
        }
         else if (empty($type))
        {
            apologize(" Veiller selectionner le type SVP.");
           
        }
		else if (empty($paroisse))
        {
            apologize(" Veiller selectionner la paroisse SVP.");
           
        }
        else 
        {
            //`nom`, `prenom`, `password`, `type_user`, `phone`, `adress`, `photo`
            //nom_user prenom_user password_user adress_user phone type
            $rows = query("SELECT * FROM user where nom = ? ",$nom_user);
            
            // if we found one paroisse, check crypt($password_user,"naledi"),
            if (count($rows) == 0)
            {
                move_uploaded_file($tmp_name,"img/".$name);
                if(query("INSERT INTO user (`nom`, `prenom`, `password`, `type_user`, `phone`, `adress`, `photo`,belongs_to) VALUES (?, ?, ?, ?, ?, ?, ?, ?)",$nom_user,  $prenom_user ,crypt($password_user,"naledi"),$type, $phone,$adress_user,$name,$paroisse)=== false)
                 {
                   apologize("Une erreur est survenue");
                     
                }
                else
                {
                   success("Utilisateur ajouté avec succèss");
                }
            }
            else  echo  apologize("Erreur, l'Utilisateur existe deja...");
			
        }
        
        
    }
    else
    {
        $table_utilisateur = query("SELECT * FROM user");
        $table_paroisse = query("SELECT * FROM paroisse2");
		$table_coord_sp = query("SELECT * FROM coordination_sp where 1");

        render("utilisateur_templates.php", ["title" => "Utilisateur","table_utilisateur" => $table_utilisateur,"table_coord_sp"=>$table_coord_sp]);
	}
   
    

?>