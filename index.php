<?php

require_once "inc/bootstrap.php";

try {
    $content = tpl(
        'list',
        [ 'cours' => $C->list() ]
    );
    respond( $content );
} catch( Exception $e ) {
    respond( $e->getMessage() );
}

