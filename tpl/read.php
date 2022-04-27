
<div class="clearfix mb-3">
    <div class="float-end">
        <a href="/update.php?id=<?php echo $cours['id']; ?>" class="btn btn-sm btn-info ajax">
            Modifier
        </a>
        <a href="/delete.php?id=<?php echo $cours['id']; ?>" class="btn btn-sm btn-danger ajax">
            Supprimmer
        </a>
    </div>
    <h2>Voir le cours</h2>
</div>
<?php include TPL . DS . 'messages.php'; ?>
<div class="mb-3">
    <div class="ratio ratio-16x9">
        <iframe 
            src="<?php echo getYoutubeEmbedUrl($cours['url']); ?>"
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen
        ></iframe>
    </div>
</div>
<dl class="row mb-3">
    <dt class="col-sm-3">Nom</dt>
    <dd class="col-sm-9"><?php echo $cours['name'] ?></dd>
    <dt class="col-sm-3">Description</dt>
    <dd class="col-sm-9"><?php echo $cours['description'] ?></dd>
    <dt class="col-sm-3">URL</dt>
    <dd class="col-sm-9"><?php echo $cours['url'] ?></dd>
    <dt class="col-sm-3">Embed URL</dt>
    <dd class="col-sm-9"><?php echo getYoutubeEmbedUrl($cours['url']) ?></dd>
    <dt class="col-sm-3">Date</dt>
    <dd class="col-sm-9"><?php echo $cours['date'] ?></dd>
    <dt class="col-sm-3">Durée</dt>
    <dd class="col-sm-9"><?php echo $cours['duration'] ?></dd>
    <dt class="col-sm-3">Professeur</dt>
    <dd class="col-sm-9"><?php echo $cours['teacher'] ?></dd>
</dl>