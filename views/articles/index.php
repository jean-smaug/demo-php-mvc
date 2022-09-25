<h1 class="text-4xl">Liste des article</h1>

<ul class="List mt-4">
    <?php foreach ($articles as $article): ?>
        <li>
            <div class="Card">
                <div class="Card__Image">
                    <img src="<?= $article["image"] ?>" alt="">
                </div>

                <h2 class="Card__Title"><?= $article["title"] ?></h2>

                <p class="Card__Content">
                    <?= substr($article["body"], -50 ) ?>
                </p>

                <a href="/article?id=<?= $article["id"] ?>">Voir l'article</a>
            </div>
        </li>
    <?php endforeach; ?>
</ul>
