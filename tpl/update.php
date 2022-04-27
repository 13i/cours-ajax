
<h2 class="mb-3">Modifier un cours</h2>
<?php include TPL . DS . 'messages.php'; ?>
<form action="/update.php?id=<?php echo $cours['id']; ?>" class="ajax mb-3" method="post">
    <?php 
    input('name', $cours['name']);
    textarea('description', $cours['description']);
    input('url', $cours['url']);
    input('duration', $cours['duration']);
    input('date', $cours['date']);
    input('teacher', $cours['teacher']);
    ?>
    <button type="submit" class="btn btn-primary mt-3">Modifier le cours</button>
</form>