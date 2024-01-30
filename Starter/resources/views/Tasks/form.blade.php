<form action="" method="post">
    <div class="card-body">
        <div class="form-group">
            <label for="Projet">Projet <span class="text-danger">*</span></label>
            <select name="projetId" id="Projet" class="custom-select">
                    <option value="Portfolio">Portfolio</option>
                    <option value="CNMH">CNMH</option>
            </select>
        </div>
        <div class="form-group">
            <label for="nominputnom1">Nom <span class="text-danger">*</span></label>
            <input name="nom" type="text" class="form-control"
                id="nominputnom1" placeholder="Enter le name de Tâche" value="">
        </div>
        <div class="form-group">
            <label class="">Description</label>
            <textarea class="form-control" name="description" rows="3"
                placeholder="Entre un Description"></textarea>        
            </div>
    </div>

    <div class="card-footer">
        <a href="{{ route('tasks.index') }}" class="btn btn-default">annuler</a>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </div>
</form>
