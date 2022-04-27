
<h2 class="mb-3">Liste des cours</h2>
<?php include TPL . DS . 'messages.php'; ?>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($cours as $c): ?>
            <tr>
                <th>
                    <?php echo $c['name']; ?>
                </th>
                <td>
                    <?php echo $c['date']; ?>
                </td>
                <td>
                    <a href="/read.php?id=<?php echo $c['id']; ?>" class="btn btn-sm btn-primary ajax">
                        Afficher
                    </a>
                    <a href="/update.php?id=<?php echo $c['id']; ?>" class="btn btn-sm btn-info ajax">
                        Modifier
                    </a>
                    <a href="/delete.php?id=<?php echo $c['id']; ?>" class="btn btn-sm btn-danger ajax">
                        Supprimmer
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>