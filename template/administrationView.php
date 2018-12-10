<!-- Main Content -->
    <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Mes articles</h5>
                            <?php foreach ($articles as $value => $data): ?>
                            <h5 class="card-title"><?= $data['title'] ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?= $data['chapo'] ?></h6>
                            <p class="card-text"><?= $data['content'] ?></p>
                            <p class="card-link">le <?= $data['creation_date_fr'] ?></p>
                            <!--<p class="card-link">Another link</p>-->
                                <a class="btn btn-success" href="/modifyArticle/<?= $data['articleId']?>" target="_blank">Modifier</a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Mes informations</h5>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Pseudo</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Mot de passe</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row"><?= $data['pseudo'] ?></th>
                                    <td><?= $data['email'] ?></td>
                                    <td>Modifier mon mot de passe</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
