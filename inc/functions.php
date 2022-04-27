<?php

/**
 * Détermine si la requête a été faite en AJAX
 */
function isAjax(){
    return  !empty($_SERVER['HTTP_X_REQUESTED_WITH']) 
            && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}

/**
 * Retourne le contenu (sans HEAD + FOOT en Ajax)
 */
function respond( $content ) 
{
    if( !isAjax() ) require_once TPL . DS . 'header.php';
    echo $content;
    if( !isAjax() ) require_once TPL . DS . 'footer.php';
}

/**
 * Rendu d'un TPL avec ses données
 */
function tpl( $file, $data=[] )
{
    extract( $data );
    ob_start();
    require_once TPL . DS . $file . '.php';
    return ob_get_clean();
}

/**
 * Récupère le paramètre GET['id']
 */
function getId()
{
    if( !isset( $_GET['id'] ) )
    {
        throw new Exception( 'ID not set.' );
    }
    if( !is_numeric( $_GET['id'] ) )
    {
        throw new Exception( 'Invalid ID.' );
    }
    return $_GET['id'];
}

/**
 * Met en forme un input[type="text"]
 */
function input( $field, $value = null )
{
    global $C;
    $fieldNames = [
        'name' => 'Nom',
        'url' => 'Url de la vidéo Youtube',
        'date' => 'Date du cours',
        'duration' => 'Durée de la vidéo',
        'teacher' => 'Professeur'
    ];
    if( isset($_POST[$field]) ){
        $value = $_POST[$field];
    }
    ?>
    <div class="form-group">
        <label for="<?php echo $field; ?>"><?php echo $fieldNames[$field]; ?></label>
        <input type="text" class="form-control" name="<?php echo $field; ?>" id="<?php echo $field; ?>" <?php if($value) echo 'value="'.$value.'"' ?>>
        <?php if(isset($C->validationErrors[$field])): ?>
            <div class="error">
                <?php echo $C->validationErrors[$field]; ?>
            </div>           
        <?php endif; ?>
    </div>
    <?php
}

/**
 * Met en forme un textarea
 */
function textarea( $field, $value = null )
{
    global $C;
    $fieldNames = [
        'description' => 'Description',
    ];
    if( isset($_POST[$field]) ){
        $value = $_POST[$field];
    }
    ?>
    <div class="form-group">
        <label for="<?php echo $field; ?>"><?php echo $fieldNames[$field]; ?></label>
        <textarea class="form-control" name="<?php echo $field; ?>" id="<?php echo $field; ?>"><?php if($value) echo $value; ?></textarea>
        <?php if(isset($C->validationErrors[$field])): ?>
            <div class="error">
                <?php echo $C->validationErrors[$field]; ?>
            </div>           
        <?php endif; ?>
    </div>
    <?php
}

/**
 * Transforme une URL youtube en URL embed
 */
function getYoutubeEmbedUrl($url)
{
    $parsed = parse_url($url);
    if( isset($parsed['path']) && $parsed['path'] == '/watch' ){
        parse_str( $parsed['query'], $params );
        return "https://www.youtube.com/embed/{$params['v']}";
    }
    return $url;
}
