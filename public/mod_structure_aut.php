<?php
    //configuration
    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $ecole ="";
          
      if(isset( $_POST["current_ecole_structure"]))
      {
        $ecole = $_POST["current_ecole_structure"];
      }
      elseif (isset($_POST["current_ecole_structure2"])) {
         $ecole = $_POST["current_ecole_structure2"];
      }
      if (query("DELETE FROM structure_autorisee WHERE id_ecole = ?",$ecole) === false ) {
        apologize("Une erreur est survenue");
      }
      else{


      //$id_last_insert = query("SELECT * FROM ecole2 WHERE nom_ecole = ?", $ecole);
      $id_last = $ecole;
      //success("$ecole");
     
       //echo " INSERT INTO classe_maternelle (nom_class,id_ecole,age_6ansF,age_6ansG,age_6F,age_6G,age_7a10ansF,age_7a10ansG) VALUES (?,?)";
      $nom_class1 = "1";
      $nom_class2 = "2";
      $nom_class3 = "3";
      $nom_class4 = "4";
      $nom_class5 = "5";
      $nom_class6 = "6";
      $nom_class = ["1","2","3","4","5","6"];
      //var_dump($nom_class);
      //$id_class = 1;

        $data['text'] = $_POST;
        $obj = $data['text'];
         //echo  $data['text']."<br>";
         //echo  count($obj)."<br>";

         $array = (array)($obj);
         $re = "";
          //echo len($array)."<br>";
          $i = 0;
          $tab[]=null;
          $deuxieme="";
         $troisieme="";
         //echo "<br> *".count($array)."*<br>";
          foreach ($array as $key2 => $value) {

           
            if ($value == "") {
               $tab[] = 0;
            }
            else $tab[] = $value;
            $i++;
          }
          for ($j=1; $j < count($array) ; $j++) { 
             $troisieme = $troisieme ." ( ".$tab[$j].",".$nom_class[$j-1].", ".$id_last."),";
          }
        


 if(query("INSERT INTO structure_autorisee (nbr_structure,nom_class,id_ecole) VALUES ".substr($troisieme, 0,-1).";")=== false)
  {
    apologize("Une erreur est survenue");
      
    }
   
    else
    {
                //$last_id = mysqli_insert_id($conn);
    //echo '<fieldset><div class="swal2-icon swal2-success animate" style="display: block;"><span class="line tip animate-success-tip"></span> <span class="line long animate-success-long"></span><div class="placeholder"></div> <div class="fix"></div></div><h2 class="text-center">Structures organisées enregistrées avec success</h2></fieldset>';

        success("Structures autorisées modifiées avec succèss");
      }


    }    
        
    }
    else
    {
    	
        render("structure_org_templates.php", ["title" => "Structures organisées"]);
	}
?>