<?php

require_once "inc/bootstrap.php";

try {
    if( !empty($_POST) ) {
        if( $C->validate() && $C->create() ) {
            $content = tpl(
                'list',
                [ 
                    'cours' => $C->list(),
                    'message' => 'Cours créé'
                ]
            );
        } else {
            $content = tpl(
                'create',
                [
                    'error' => 'Merci de corriger les erreurs ci-dessous.'
                ]
            );
        }
    } else {
        $content = tpl(
            'create',
            []
        );
    }
    respond( $content );
} catch( Exception $e ) {
    respond( $e->getMessage() );
}

