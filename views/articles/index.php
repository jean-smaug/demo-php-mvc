<h1 class="text-4xl">Liste des article</h1>

<ul class="List mt-4">
    <?php foreach ($articles as $article): ?>
        <li>
            <div class="Card">
                <div class="Card__Image">
                    <img src="elephant.jpeg" alt="">
                </div>

                <h2 class="Card__Title"><?php echo $article["title"] ?></h2>

                <p class="Card__Content">
                    <?= $article["content"] ?>
                </p>

                <a href="/article?id=<?= $article["id"] ?>">Voir l'article</a>
            </div>
        </li>
    <?php endforeach; ?>
</ul>
