
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mt-5 mb-3 clearfix">
                    <h2 class="pull-left">Modifier un cours</h2>
                </div>
                <form action="index.php?a=update&id=<?php echo $id; ?>">
                    <div class="form-group">
                        <label>Nom</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $c['name']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description"><?php echo $c['description']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>URL</label>
                        <input type="text" class="form-control" name="url" value="<?php echo $c['url']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Durée</label>
                        <input type="number" class="form-control" name="duration" value="<?php echo $c['duration']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Date</label>
                        <input type="text" class="form-control" name="date" value="<?php echo $c['date']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Professeur</label>
                        <input type="text" class="form-control" name="teacher" value="<?php echo $c['teacher']; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>        
    </div>
</div>