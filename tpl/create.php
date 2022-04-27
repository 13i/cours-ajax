
<h2 class="mb-3">Créer un cours</h2>
<?php include TPL . DS . 'messages.php'; ?>
<form action="/create.php" class="ajax" method="post">
    <?php 
    input('name');
    textarea('description');
    input('url');
    input('duration');
    input('date');
    input('teacher');
    ?>
    <button type="submit" class="btn btn-primary mt-3">Créer le cours</button>
</form>