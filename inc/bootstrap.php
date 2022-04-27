<?php
/**
 * Bootstrap
 * 
 * Fichier à inclure en haut de chaque page pour préparer l'application
 * 
 */


// Constantes
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'constants.php';

// Fonctions
require_once INC . DS . 'functions.php';

// Class Cours (appels à la BDD)
require_once INC . DS . 'Cours.php';

// Instance globale de la class Cours
global $C;
$C = new Cours();
