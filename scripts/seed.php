<?php

require_once 'vendor/autoload.php';

$db = (new \App\Core\Database())->getDatabase();
$faker = Faker\Factory::create();

$stmt = $db->prepare("INSERT INTO articles(title, body) VALUES (:title, :body)");

for($i = 0; $i < 100; $i++) {
    $title = $faker->sentence();
    $body = $faker->paragraphs(5, true);

    $stmt->execute([
        "title" => $title,
        "body" => $body
    ]);
}
