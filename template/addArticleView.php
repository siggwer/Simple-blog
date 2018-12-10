<!-- Main Content -->
<div class="container">
    <div class="flashbag">
        <?php if(isset($_SESSION['flash']['failure'])): ?>
            <p><?= $_SESSION['flash']['failure']; ?></p>
        <?php endif; ?>
    </div>
    <div class="row">
        <div class="col-lg-10 col-md-10 mx-auto">
            <form class="form" role="form" action="/addArticle" method="post">
                <div class="form-group">
                    <label for="author">Auteur :</label>
                    <input type="text" class="form-control" id="author" name="author" placeholder="<?php if(isset($session['id'])){ echo $session['pseudo'];} else{echo 'auteur';}?>" value="<?php $session['pseudo']?>">
                    <span class="help-inline"></span>
                </div>
                <div class="form-group">
                    <label for="title">Titre :</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Titre">
                    <span class="help-inline"></span>
                </div>
                <div class="form-group">
                    <label for="chapo">Chapô :</label>
                    <textarea type="text" class="form-control" id="chapo" name="chapo" placeholder="Chapô de l'article" rows="5"></textarea>
                    <span class="help-inline"></span>
                </div>
                <div class="form-group">
                    <label for="content">Contenu :</label>
                    <textarea type="text" class="form-control" id="content" name="content" placeholder="Contenu de l'article" rows="15"></textarea>
                    <span class="help-inline"></span>
                </div>
                <br>
                <div class="form-actions">
                    <button type="submit" class="btn btn-success">Ajouter</button>
                    <a class="btn btn-primary" href="/administration">Retour</a>
                </div>
            </form>
        </div>
    </div>
</div>

<hr>
