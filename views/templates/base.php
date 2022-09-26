<!doctype html>
<html lang="fr" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?? "Demo PHP" ?></title>


    <?php if(isset($assetsBaseUrl)): ?>
        <link rel="stylesheet" href="<?= $assetsBaseUrl ?>/main.css">
        <script src="<?= $assetsBaseUrl ?>/main.js"></script>
    <?php endif; ?>
</head>

<body class="d-flex flex-column h-100">
    <?php require_once __DIR__ . "/../partials/header.php" ?>


    <main class="flex-shrink-0 container">
        <?php if(isset($flash_messages) && count($flash_messages) > 0): ?>
            <div class="mb-5">
                <?php foreach ($flash_messages as $flash_message): ?>
                    <div class="card bg-danger text-white">
                        <div class="card-body">
                            <?= $flash_message["value"] ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <?= $content ?? "Error: no content" ?>
    </main>

    <?php require_once __DIR__ . "/../partials/footer.php" ?>
</body>
</html>
