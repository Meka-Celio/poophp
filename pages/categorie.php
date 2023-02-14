<?php
use app\App;
use app\tables\Article;
use app\tables\Categorie;

    $categorie      = Categorie::find($_GET['id']);
    if ($categorie === false) {
        App::notFound();
    }

    App::setTitle($categorie->nom);

    $articles       = Article::getLastByCategory($_GET['id']);
    $categories     = Categorie::all();
?>

<h1><?= $categorie->nom ?></h1>

<div class="row">
    <div class="col-sm-10">
        <?php
        foreach ($articles as $post): ?>
            <div class="mt-2">
                <h2>
                    <a href="<?= $post->url ?>"><?= $post->title ?></a>
                </h2>
                <p><em><?= $post->categorie ?></em></p>
                <?= $post->extract ?>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="col-sm-2">
        <ul>
            <?php foreach ($categories as $cate): ?>
                <li><a href="<?= $cate->url ?>"><?= $cate->nom ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>

</div>