<?php

    
    // configuration
    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (empty($_POST["nom_sec"]))
        {
            apologize(" Veiller taper la section SVP.");
             /* echo '<div class="msgApology alert alert-danger alert-dismissible animated bounceIn" role="alert">
                <button class="close_apology" id="close_apology" type="button" class="closebtn close" >
                <span >×</span>
                </button>
                Veiller taper la section SVP.
            </div>';*/
        }
        else if (empty($_POST["nom_op"]))
        {
            apologize("Veiller taper l'option SVP.");
            /*echo '<div class="msgApology alert alert-danger alert-dismissible animated bounceIn" role="alert">
                <button class="close_apology" id="close_apology" type="button" class="closebtn close" >
                <span >×</span>
                </button>
                Veiller taper l\'option SVP.
            </div>';*/
        }
        else{
            $rows = query("SELECT * FROM section where nom_section = ?",$_POST["nom_sec"]);
        
        // if we found one section, check || count($rows) == 1)
        if (count($rows) == 0)
        {
           
            if(query("INSERT INTO section (nom_section) VALUES (?)", $_POST["nom_sec"])=== false)
            {
               apologize("Une erreur est survenue");
                /* echo '<div class="msgApology alert alert-danger alert-dismissible animated bounceIn" role="alert">
                <button class="close_apology" id="close_apology" type="button" class="closebtn close" >
                <span >×</span>
                </button>
                Une erreur est survenue
            </div>';*/
            }
            else
            {
                
               $id_last_insert = query("SELECT LAST_INSERT_ID() AS id");

                $id_last = $id_last_insert[0]["id"];
                //echo $id_last;
                  if(query("INSERT INTO option (nom_option,belongs_to) VALUES (?,?)", $_POST["nom_op"], $id_last)=== false)
                {
                   apologize("Une erreur est survenue");
                    /* echo '<div class="msgApology alert alert-danger alert-dismissible animated bounceIn" role="alert">
                    <button class="close_apology" id="close_apology" type="button" class="closebtn close" >
                    <span >×</span>
                    </button>
                    Une erreur est survenue
                </div>';*/
                }
                else
                {
                    success("Section / option ajoutée avec succèss");
                }
                
            }
        }
        else if(count($rows) == 1){
             $current_id_inserted = query("SELECT * FROM section where nom_section = ?",$_POST["nom_sec"]);

                $current_id = $current_id_inserted[0]["id"];
                //echo $id_last;
                if(query("INSERT INTO option (nom_option,belongs_to) VALUES (?,?)", $_POST["nom_op"], $current_id)=== false)
                {
                    apologize("Une erreur est survenue");
                    /* echo '<div class="msgApology alert alert-danger alert-dismissible animated bounceIn" role="alert">
                    <button class="close_apology" id="close_apology" type="button" class="closebtn close" >
                    <span >×</span>
                    </button>
                    Une erreur est survenue
                </div>';*/
                }
                else
                {
                    success("Section / option ajoutée avec succèss");
                }
        }
        //else  
        /*echo '<div class="msgApology alert alert-danger alert-dismissible animated bounceIn" role="alert">
                <button class="close_apology" id="close_apology" type="button" class="closebtn close" >
                <span >×</span>
                </button>
                Impossible d'."'".'ajouter deux même paroisses
            </div>';*/
            //apologize("Impossible d'ajouter deux mêmes sections"); 
        }
            
    }
    else
    {
         $table_section = query("SELECT * FROM section WHERE 1");
         $table_option = query("SELECT * FROM option WHERE 1");
         

        render("section_option_templates.php", ["title" => "Section et option","table_section"=> $table_section,"table_option"=>$table_option]);
    }
   
    

?>