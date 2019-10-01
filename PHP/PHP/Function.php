<?php

function ConsulterQuestion(){
    $DataBase = mysqli_connect ( "localhost" , "root" , "" ) ;

                                //--- Ouverture de la base de données
    mysqli_select_db ( $DataBase, "slamquiz" ) ;

                                //--- Préparation de la requête
    $Requete = "Select * From question ;" ;
                                        
                                //--- Exécution de la requête (fin du script possible sur erreur ...)

    $Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
    echo"<tr> <th> Id </th> <th> Nom </th> <th> Prénom </th></tr>";
                                      //--- Enumération des lignes du résultat de la requête
    while (  $ligne = mysqli_fetch_array($Resultat)  ){
                                        //--- Afficher une ligne du tableau HTML pour chaque enregistrement de la table 
        echo "<form action=''>";
            echo "<tr>";
                echo "<td><input type='text' name='Id' value='".UTF8_decode($ligne["Id_Question"])."'></td>\n";  
                echo "<td><input type='text' name='Nom' value='".UTF8_decode($ligne["shortname"])."'></td>\n";
                echo "<td><input type='text' name='Question' value='".UTF8_decode($ligne["longname"])."'></td>\n";
            echo "</tr>";
        echo "</form>";
    }
                                    
    //--- Libérer l'espace mémoire du résultat de la requête
    mysqli_free_result ( $Resultat ) ;

    //--- Déconnection de la base de données
    mysqli_close ( $DataBase ) ;
}

function RandomQuestion(){
    $DataBase = mysqli_connect ( "localhost" , "root" , "" ) ;

                                //--- Ouverture de la base de données
    mysqli_select_db ( $DataBase, "slamquiz" ) ;

                                //--- Préparation de la requête
    $Requete = "Select * From question ;" ;
    $Requete2 = "Select * From question ;" ;
                                        
                                //--- Exécution de la requête (fin du script possible sur erreur ...)

    $Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
    $Resultat2 = mysqli_query ( $DataBase, $Requete2 )  or  die(mysqli_error($DataBase) ) ;
    $random = 0;                                  //--- Enumération des lignes du résultat de la requête
    while (  $ligne = mysqli_fetch_array($Resultat)  ){
                                        //--- Afficher une ligne du tableau HTML pour chaque enregistrement de la table 
        $random++;
    }
    
    if (  $ligne = mysqli_fetch_array($Resultat2)  ){
                                        //--- Afficher une ligne du tableau HTML pour chaque enregistrement de la table 

        if( $ligne["Id_Question"] = rand(1,$random)){
            print $ligne["Id_Question"];
            print $ligne["longname"];
        }
    }    
    //--- Libérer l'espace mémoire du résultat de la requête
    mysqli_free_result ( $Resultat ) ;

    //--- Déconnection de la base de données
    mysqli_close ( $DataBase ) ;
}
