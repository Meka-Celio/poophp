<div class="row">
    <div class="col-sm-10">
        <?php
            use app\tables\Article;
            use app\tables\Categorie;

            foreach (Article::getLast() as $post): ?>
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
            <?php foreach (Categorie::all() as $categorie): ?>
                <li><a href="<?= $categorie->url ?>"><?= $categorie->nom ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>

</div>