<!-- Article Content -->

<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <p></p>
                <h2 class="section-heading"><?= htmlspecialchars($articles['title']) ?></h2>

                <blockquote class="blockquote">résumé : <?= htmlspecialchars($articles['chapo']) ?></blockquote>

                <p><?= nl2br(htmlspecialchars($articles['content'])) ?></p>

                <p>sujet créé le : <?= htmlspecialchars($articles['creation_date_fr']) ?> par </p>
            </div>
            <?php foreach ($comment as $data): ?>
            <div class="col-lg-8 col-md-10 mx-auto">
                <p></p>
                <h2 class="section-heading">commentaires : <?= htmlspecialchars($data['comments']) ?></h2>

                <p>commenté par : <?= htmlspecialchars($data['author']) ?></p>

                <p>commenté le : <?= htmlspecialchars($data['update_date']) ?></p>
            </div>
            <?php endforeach; ?>
        </div>
        <div id="contact" class="contact col-lg-8 col-md-10 mx-auto clearfix">
        <h3>Ajouter un commentaire</h3>
        <form action="/articleDetailsView/<?= $articles['articleId'];?>" method="post">
            <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                    <label>Auteur</label>
                    <input type="text" class="form-control" placeholder="<?php if(isset($session['pseudo'])){ echo $session['pseudo'];} else{echo 'pseudo';}?>" id="author" name="author" required data-validation-required-message="Entrer votre pseudo." value="<?php $session['pseudo']?>">
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                    <label>Commentaire</label>
                    <textarea rows="3" class="form-control" placeholder="message" id="comments" name="comments" required data-validation-required-message="Entrer votre message."></textarea>
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div id="success"></div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" id="sendMessageButton">Envoyer</button>
            </div>
        </form>
        </div>
    </div>
</article>
<div class="col-lg-8 col-md-10 mx-auto clearfix">
    <a class="btn btn-primary float-right" href="/addArticle">Ajouter un article</a>
</div>
<br />
