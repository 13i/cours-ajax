<?php

require_once "inc/bootstrap.php";

try {

    $id = getId();

    if( !empty($_POST) ) {
        if( $C->validate() && $C->update($id) ){
            $content = tpl(
                'read',
                [
                    'cours' => $C->read($id),
                    'message' => 'Cours mis à jour'
                ]
            );
        } else {
            $content = tpl(
                'update',
                [
                    'cours' => $C->read($id),
                    'error' => 'Merci de corriger les erreurs ci-dessous.'
                ]
            );
        }
    } else {
        $content = tpl(
            'update',
            [ 'cours' => $C->read($id) ]
        );
    }
    respond( $content );
} catch( Exception $e ) {
    respond( $e->getMessage() );
}

