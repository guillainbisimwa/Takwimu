<?php

	
    // configuration
    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
          
    
        //echo $_POST."<br>";
      /*nom_class varchar(200) not null,
  id_ecole int not null,
  age_6ansF int not null,
  age_6ansG int not null,
  age_6F int not null,
  age_6G int not null,
  age_7a10ansF int not null,
  age_7a10ansG int not null,*/

      $id_last_insert = query("SELECT * FROM ecole2 WHERE nom_ecole = ?", $_POST["current_ecole"]);
      $id_last = $id_last_insert[0]["id"];

      /*if(query("INSERT INTO classe_maternelle (nom_class,id_ecole,age_6ansF,age_6ansG,age_6F,age_6G,age_7a10ansF,age_7a10ansG) VALUES (?,?)", $_POST["nom_op"], $id_last)=== false)
      {
        echo '<div class="msgApology alert alert-danger alert-dismissible animated bounceIn" role="alert">
                    <button class="close_apology" id="close_apology" type="button" class="closebtn close" >
                    <span >×</span>
                    </button>
                    Une erreur est survenue
                </div>';
      }*/
       //echo " INSERT INTO classe_maternelle (nom_class,id_ecole,age_6ansF,age_6ansG,age_6F,age_6G,age_7a10ansF,age_7a10ansG) VALUES (?,?)";
      $nom_class1 = "1";
      $nom_class2 = "2";
      $nom_class3 = "3";
      $id_class = 1;

        $data['text'] = $_POST;
        $obj = $data['text'];
         //echo  $data['text']."<br>";
         //echo  count($obj)."<br>";

         $array = (array)($obj);
         $re = "";
          //echo len($array)."<br>";
          $i = 0;
          $premiere="";
          $deuxieme="";
          $troisieme="";
          foreach ($array as $key2 => $value) {
            if ($i == 0 || $i == 1 || $i == 6 || $i == 7 || $i == 12 || $i == 13) {
               if ($value == "") {
               $xp = 0;
                $premiere = $premiere."".$xp.",";
              }
              else $premiere = $premiere."".$value.",";
               //mysql_insert_id();
            }
            elseif ($i == 2 || $i == 3 || $i == 8 || $i == 9 || $i == 14 || $i == 15) {
              if ($value == "") {
               $xd = 0;
                $deuxieme = $deuxieme."".$xd.",";
              }
              else $deuxieme = $deuxieme."".$value.",";
            
            }
            elseif ($i == 4 || $i == 5 || $i == 10 || $i == 11 || $i == 16 || $i == 17) {
              if ($value == "") {
               $xt = 0;
                $troisieme = $troisieme."".$xt.",";
              }
              else $troisieme = $troisieme."".$value.",";
            }
            //echo $i.")".$key2 ." - ".$value."<br>";
            /*if ($value == "") {
               $x = 0;
              $re = $re."".$x.",";
            }
            else $re = $re."".$value.",";*/
            $i++;
            
          }
          //echo "$premiere $nom_class1 $id_last";


 if(query("INSERT INTO classe_maternelle (age_6ansF,age_6ansG,age_6F,age_6G,age_7a10ansF,age_7a10ansG,nom_class,id_ecole) VALUES (".$premiere.' "'.$nom_class1.'", '.$id_last.")")=== false)
  {
               //apologize("Une erreur est survenue");
     apologize("Une erreur est survenue");
    }
    elseif (query("INSERT INTO classe_maternelle (age_6ansF,age_6ansG,age_6F,age_6G,age_7a10ansF,age_7a10ansG,nom_class,id_ecole) VALUES (".$deuxieme.' "'.$nom_class2.'", '.$id_last.")") === false ) {
      apologize("Une erreur est survenue");
    }
    elseif (query("INSERT INTO classe_maternelle (age_6ansF,age_6ansG,age_6F,age_6G,age_7a10ansF,age_7a10ansG,nom_class,id_ecole) VALUES (".$troisieme.' "'.$nom_class3.'", '.$id_last.")")===false) {
     apologize("Une erreur est survenue");
    }
    else
    {
                //$last_id = mysqli_insert_id($conn);
    //echo '<fieldset><div class="swal2-icon swal2-success animate" style="display: block;"><span class="line tip animate-success-tip"></span> <span class="line long animate-success-long"></span><div class="placeholder"></div> <div class="fix"></div></div><h2 class="text-center"> Ages revolue et effectifs enregistrées avec success</h2></fieldset>';

               success("Ages revolue et effectifs enregistrées avec success");
      }


            
    }
    else
    {
        $table_section = query("SELECT * FROM section WHERE 1");
        $table_paroisse = query("SELECT * FROM paroisse WHERE 1");
         

        render("ecole_templates.php", ["title" => "Section et option","table_paroisse"=>$table_paroisse,"table_section" => $table_section]);
	}
   
    

?>