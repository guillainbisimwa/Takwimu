<?php
    //configuration
    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
      $id_last_insert = query("SELECT * FROM ecole2 WHERE nom_ecole = ?", $_POST["current_ecole"]);
      $id_last = $id_last_insert[0]["id"];

      $list_option =  $id_last_insert[0]["liste_option"];
      //echo $list_option;
      @$list_option_tab = split("[**]+", $list_option);
      $ii = 1;
      $tab_list_option[]=null;
      foreach ($list_option_tab as $val) {
        //echo $ii ." ".$val." <br>";
        if ($val != "") {
           //echo "SELECT * FROM option WHERE nom_option = ?". $val ."<br>";
          
          $check_last_insert = query("SELECT * FROM option WHERE nom_option = ?", $val);

          $tab_list_option[] = $check_last_insert[0]["id"];

          $ii++;
        }
      } 
      //var_dump($tab_list_option);
      //echo 
      $count_tab_section = count($tab_list_option) -1;
      //echo $count_tab_section;
      //$id_last = $id_last_insert[0]["id"];


     
       //echo " INSERT INTO classe_maternelle (nom_class,id_ecole,age_6ansF,age_6ansG,age_6F,age_6G,age_7a10ansF,age_7a10ansG) VALUES (?,?)";
      $nom_class3 = "3";
      $nom_class4 = "4";
      $nom_class5 = "5";
      $nom_class6 = "6";
      //$nom_class3 = "3";
      //$id_class = 1;

        $data['text'] = $_POST;
        $obj = $data['text'];
         //echo  $data['text']."<br>";
         //echo  count($obj)."<br>";

         $array = (array)($obj);
         $re = "";
         $nbr = 0;
          //echo len($array)."<br>";
          $i = 0;
          $troisieme="";
          $quatrieme="";
          $cinquieme="";
          $sixieme="";

          $tab[]=null;
          

          foreach ($array as $key2 => $value) {
            //if ($i == 0 || $i == 1 || $i == 6 || $i == 7 || $i == 12 || $i == 13) {
            if ($value == "") {
                 
             
            }
            //echo $i.")".$key2 ." - ".$value."<br>";
              $tab[]= $value;
              $i++;
            $nbr++; 
          }
          
          //echo $tab[6];
          $ii = 1;
          $tabd[][] = null;
          for ($i=0; $i <$count_tab_section ; $i++) {
            for ($j=0; $j < 8 ; $j++) { 
              if ($tab[$ii] == "") {
                $tabd[$i][$j] = 0;
              }
              else {
                $tabd[$i][$j] = $tab[$ii];
              }
             
             $ii++;
            }

          }
          //var_dump($tabd);
          //echo $tabd[0][5];
          for ($i=0; $i < $count_tab_section ; $i++) {
            $troisieme = $troisieme."  (".$tabd[$i][0]." , ".$tabd[$i][1].",".$id_last.',"'.$nom_class3.' " ,'.$tab_list_option[$i+1].")," ; 

            $quatrieme = $quatrieme."  (".$tabd[$i][2]." , ".$tabd[$i][3].",".$id_last.',"'.$nom_class4.' " ,'.$tab_list_option[$i+1].")," ; 

            $cinquieme = $cinquieme."  (".$tabd[$i][4]." , ".$tabd[$i][5].",".$id_last.',"'.$nom_class5.' " ,'.$tab_list_option[$i+1].")," ; 

            $sixieme = $sixieme."  (".$tabd[$i][6]." , ".$tabd[$i][7].",".$id_last.',"'.$nom_class6.' " ,'.$tab_list_option[$i+1].")," ; 

            
           
          }
          //echo "INSERT INTO `classe_secondaire_cl`(`effectif_F`, `effectif_G`,`id_ecole`, `nom_class`,  `option`) VALUES ".substr($troisieme, 0,-1).";<br>";
          



 if(query("INSERT INTO `classe_secondaire_cl`(`effectif_F`, `effectif_G`,`id_ecole`, `nom_class`,  `option`) VALUES ".substr($troisieme, 0,-1))=== false)
  {
        apologize("Une erreur est survenue");
      
    }
    elseif (query("INSERT INTO `classe_secondaire_cl`(`effectif_F`, `effectif_G`,`id_ecole`, `nom_class`,  `option`) VALUES ".substr($quatrieme, 0,-1)) === false ) {
      apologize("Une erreur est survenue");
    }
    elseif (query("INSERT INTO `classe_secondaire_cl`(`effectif_F`, `effectif_G`,`id_ecole`, `nom_class`,  `option`) VALUES ".substr($cinquieme, 0,-1))===false) {
      apologize("Une erreur est survenue");
    }
     elseif (query("INSERT INTO `classe_secondaire_cl`(`effectif_F`, `effectif_G`,`id_ecole`, `nom_class`,  `option`) VALUES ".substr($sixieme, 0,-1))===false) {
      apologize("Une erreur est survenue");
    }
    else
    {
                //$last_id = mysqli_insert_id($conn);
    //echo '<fieldset><div class="swal2-icon swal2-success animate" style="display: block;"><span class="line tip animate-success-tip"></span> <span class="line long animate-success-long"></span><div class="placeholder"></div> <div class="fix"></div></div><h2 class="text-center"> Effectifs enregistrées avec success</h2></fieldset>';

        success("Effectifs enregistrées avec succèss");
      }


       
        
    }
    else
    {
		$table_niveau = query("SELECT * FROM niveau WHERE 1");
        render("effectif_age_sex_templates.php", ["title" => "Enregistrement de l'effectif (age/sexe)","table_niveau"=>$table_niveau]);
	}
?>