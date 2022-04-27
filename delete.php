<?php

require_once "inc/bootstrap.php";

try {

    $id = getId();

    if( $C->delete($id) ){
        $content = tpl(
            'list',
            [
                'cours' => $C->list(),
                'message' => 'Cours supprimé !'
            ]
        );
    } else {
        $content = tpl(
            'list',
            [
                'cours' => $C->list(),
                'error' => 'Impossible de supprimer le cours.'
            ]
        );
    }
    respond( $content );
    
} catch( Exception $e ) {
    respond( $e->getMessage() );
}

