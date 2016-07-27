<?php $this->layout('layout', ['title' => 'Modifier une News']) ?>

<?php $this->start('main_content') ?>
<h2>Modifier une News</h2>
<div class="row">
    <div class="col-md-6 text-left">
    <?php if (isset($newsDetails)): ?>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags fa-fw" aria-hidden="true"></i></span>
                <input id="titre" type="text" name="titre" value="<?= $newsDetails['con_title'] ?>" required="" placeholder="Titre" class="form-control text-left">
            </div>
            <span class="help-block"></span>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar fa-fw" aria-hidden="true"></i></span>
                <input id="dateStart" type="date" name="dateStart" value="<?= $newsDetails['con_date_start'] ?>" required="" placeholder="Date de début" class="form-control text-left">
            </div>
            <span class="help-block"></span>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar fa-fw" aria-hidden="true"></i></span>
                <input id="dateEnd" type="date" name="dateEnd" value="<?= $newsDetails['con_date_end'] ?>" required="" placeholder="Date de fin" class="form-control text-left">
            </div>
             <span class="help-block"></span>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-align-left"></i></span>
                <textarea id="synopsis" type="text" name="synopsis" rows="10" value="<?= $newsDetails['con_synopsis'] ?>" placeholder="Synopsis" class="form-control text-left"></textarea>
            </div>
            <span class="help-block"></span>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-align-left"></i></span>
                <textarea id="description" type="text" name="description" rows="10" value="<?= $newsDetails['con_description'] ?>" placeholder="Description" class="form-control text-left"></textarea>
            </div>
            <span class="help-block"></span>
            <h5><strong>Veuillez sélectionner une photo à ajouter(optionnel).</strong></h5>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-picture-o fa-fw"></i></span>
                <input id="avatar" type="file" name="avatar" class="form-control text-left">
            </div>
            <span class="help-block"></span>
<<<<<<< HEAD
            <button class="btn btn-primary btn-sm active" type="submit" value="Ajouter une news" href="#"><i class="fa fa-pencil fa-fw"></i> Modifier la news</button>
=======
            <button class="btn btn-primary btn-sm active" type="submit"><i class="fa fa-pencil fa-fw"></i> Modifier la News</button>
>>>>>>> refs/remotes/origin/Patrick
        </form>
    </div>
    
    <?php elseif (isset($vals)): ?>
    <form action="" method="post" enctype="multipart/form-data">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags fa-fw" aria-hidden="true"></i></span>
                <input id="titre" type="text" name="titre" value="<?= $vals['con_title'] ?>" required="" placeholder="Titre" class="form-control text-left">
            </div>
            <span class="help-block"></span>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar fa-fw" aria-hidden="true"></i></span>
                <input id="dateStart" type="date" name="dateStart" value="<?= $vals['con_date_start'] ?>" required="" placeholder="Date de début" class="form-control text-left">
            </div>
            <span class="help-block"></span>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar fa-fw" aria-hidden="true"></i></span>
                <input id="dateEnd" type="date" name="dateEnd" value="<?= $vals['con_date_end'] ?>" required="" placeholder="Date de fin" class="form-control text-left">
            </div>
            <span class="help-block"></span>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-align-left"></i></span>
                <textarea id="synopsis" type="text" name="synopsis" rows="10" value="<?= $vals['con_synopsis'] ?>" placeholder="Synopsis" class="form-control text-left"></textarea>
            </div>
            <span class="help-block"></span>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-align-left"></i></span>
                <textarea id="description" type="text" name="description" rows="10" value="<?= $vals['con_description'] ?>" placeholder="Description" class="form-control text-left"></textarea>
            </div>
            <span class="help-block"></span>
            <h5><strong>Veuillez sélectionner une photo à ajouter(optionnel).</strong></h5>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-picture-o fa-fw"></i></span>
                <input id="avatar" type="file" name="avatar" class="form-control text-left">
            </div>
            <span class="help-block"></span>
<<<<<<< HEAD
            <button class="btn btn-primary btn-sm active" type="submit" value="Ajouter une news" href="#"><i class="fa fa-pencil fa-fw"></i> Modifier la news</button>
=======
            <button class="btn btn-primary btn-sm active" type="submit"><i class="fa fa-pencil fa-fw"></i> Modifier la News</button>
>>>>>>> refs/remotes/origin/Patrick
        </form>
        <?php endif; ?>
    </div>
<?php $this->stop('main_content') ?>