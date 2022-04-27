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
 * Détermine si la requête a été faite en AJAX
 */
function isAjax(){
    return  !empty($_SERVER['HTTP_X_REQUESTED_WITH']) 
            && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}

/**
 * Liste des cours
 */
function listCours(){

    // Connexion BDD
    $link = getMysqlConnexion();

    // REQUÊTE
    $sql = "SELECT * FROM cours";

    $rows = [];

    // Loop Résultats
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $rows[] = $row;
            }
        }
        mysqli_free_result($result);
    }

    // Fermeture connexion BDD
    mysqli_close($link);

    // On affiche l'HTML
    require_once "tpl/list.php";
}


function createCours(){


    // On affiche l'HTML
    require_once "tpl/create.php";
}

function readCours($id){

}

function updateCours($id){

}

function deleteCours($id){

}