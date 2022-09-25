<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?? "Base" ?></title>
</head>
<body class="d-flex flex-column h-100">
    <?php require_once __DIR__ . "/../partials/header.php" ?>

    <main class="flex-shrink-0">
        <?= $content ?? "No content" ?>
    </main>

    <?php require_once __DIR__ . "/../partials/footer.php" ?>
</body>
</html>