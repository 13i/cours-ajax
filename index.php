<?php

require_once "inc/header.php";

// On récupère la liste des cours
$cours = getCours();

?>


<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="mt-5 mb-3 clearfix">
                    <h2 class="pull-left">Liste des cours</h2>
                    <a href="#add" class="btn btn-success pull-right">
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
                        <?php foreach($cours as $c): ?>
                            <tr>
                                <th>
                                    <?php echo $c['nom']; ?>
                                </th>
                                <td>
                                    <?php echo $c['date']; ?>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-primary">
                                        Afficher
                                    </a>
                                    <a href="#">
                                        Modifier
                                    </a>
                                    <a href="#">
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

<?php


require_once "inc/footer.php";