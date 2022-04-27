<?php

/**
 * Connexion BDD
 */
function getMysqlConnexion() {
    // Connexion
    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
    // Si erreur
    if( $link === false ){
        die("ERREUR : Impossible de se connecter à MySQL. Message : " . mysqli_connect_error());
    }

    return $link;
}

/**
 * Liste des cours
 */
function getCours(){

    // Connexion BDD
    $link = getMysqlConnexion();

    // REQUÊTE
    $sql = "SELECT * FROM employees";

    // Loop Résultats
    if($result = mysqli_query($link, $sql)){
        $rows = [];
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $rows[] = $row;
            }
        }
        mysqli_free_result($result);
    }

    // Fermeture connexion BDD
    mysqli_close($link);
}