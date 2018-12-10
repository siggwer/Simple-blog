<!-- Article Content -->
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <p></p>

                <h2 class="section-heading">Article <?= htmlspecialchars($comments['title']) ?></h2>


                <blockquote class="blockquote">Résumé : <?= htmlspecialchars($comments['chapo']) ?></blockquote>

                <p>Contenu : <?= nl2br(htmlspecialchars($comments['content'])) ?></p>

                <p class="post-meta">Commentaire : <?= nl2br(htmlspecialchars($comments['comments'])) ?> par <a><strong><?= htmlspecialchars($comments['author']) ?></strong></a> le <?= $comments['update_date'] ?></p>

                <div class="col-lg-8 col-md-10 mx-auto clearfix">
                    <a class="btn btn-primary float-left" href="/articleDetailsView/<?= $comments['articleId']?>" target="_blank">Retour à l'article</a>
                </div>
            </div>
        </div>
    </div>
</article>

