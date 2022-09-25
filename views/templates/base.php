<!doctype html>
<html lang="fr" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?? "Demo PHP" ?></title>
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

    <?php if(isset($assetsBaseUrl)): ?>
        <link rel="stylesheet" href="<?= $assetsBaseUrl ?>/main.css">
        <script src="<?= $assetsBaseUrl ?>/main.js"></script>
    <?php endif; ?>
</head>

<body class="d-flex flex-column h-100">
    <?php require_once __DIR__ . "/../partials/header.php" ?>

    <main class="flex-shrink-0">
        <?= $content ?? "Error: no content" ?>
    </main>

    <?php require_once __DIR__ . "/../partials/footer.php" ?>
</body>
</html>
