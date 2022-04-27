<?php

require_once "inc/config.php";
require_once "inc/functions.php";


// On récupère l'action
$allowedActions = ['list', 'create', 'read', 'update', 'delete'];
$action = isset($_GET['a']) && in_array($_GET['a'], $allowedActions) ? $_GET['a'] : 'list';

// On récupère l'ID si besoin
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// On affiche le header si pas AJAX
if( !isAjax() ) require_once "inc/header.php";

// On récupère le bon contenu
switch( $action ){
    case 'list':
        listCours();
        break;
    case 'create':
        createCours();
        break;
    case 'read':
        readCours($id);
        break;
    case 'update':
        updateCours($id);
        break;
    case 'delete':
        deleteCours($id);
        break;
}

// On affiche le footer si pas AJAX
if( !isAjax() ) require_once "inc/header.php";
