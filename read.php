<?php

require_once "inc/bootstrap.php";

try {
    $id = getId();
    $content = tpl(
        'read',
        [ 'cours' => $C->read( $id ) ]
    );
    respond( $content );
} catch( Exception $e ) {
    respond( $e->getMessage() );
}

