<?php
if ( isset($message) && !empty($message) ) :
?>
    <div class="alert alert-success" role="alert">
        <?php echo $message; ?>
    </div>
<?php elseif ( isset($error) && !empty($error) ): ?> 
    <div class="alert alert-danger" role="alert">
        <?php echo $error; ?>
    </div>
<?php endif; ?>
