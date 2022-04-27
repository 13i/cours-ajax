
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mt-5 mb-3 clearfix">
                    <h2 class="pull-left">Cours</h2>
                    <a href="index.php?a=create" class="btn btn-success pull-right">
                        <i class="fa fa-plus"></i> Ajouter un cours
                    </a>
                </div>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($rows as $c): ?>
                            <tr>
                                <th>
                                    <?php echo $c['name']; ?>
                                </th>
                                <td>
                                    <?php echo $c['date']; ?>
                                </td>
                                <td>
                                    <a href="index.php?a=read&id=<?php echo $c['id']; ?>" class="btn btn-sm btn-primary">
                                        Afficher
                                    </a>
                                    <a href="index.php?a=update&id=<?php echo $c['id']; ?>" class="btn btn-sm btn-info">
                                        Modifier
                                    </a>
                                    <a href="index.php?a=delete&id=<?php echo $c['id']; ?>" class="btn btn-sm btn-danger">
                                        Supprimmer
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>        
    </div>
</div>