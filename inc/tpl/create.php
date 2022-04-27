
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mt-5 mb-3 clearfix">
                    <h2 class="pull-left">Créer un cours</h2>
                </div>
                <form action="index.php?a=create">
                    <div class="form-group">
                        <label>Nom</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label>URL</label>
                        <input type="text" class="form-control" name="url">
                    </div>
                    <div class="form-group">
                        <label>Durée</label>
                        <input type="number" class="form-control" name="duration">
                    </div>
                    <div class="form-group">
                        <label>Date</label>
                        <input type="text" class="form-control" name="date">
                    </div>
                    <div class="form-group">
                        <label>Professeur</label>
                        <input type="text" class="form-control" name="teacher">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>        
    </div>
</div>