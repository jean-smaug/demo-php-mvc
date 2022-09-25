<?php

require_once 'vendor/autoload.php';

$db = (new \App\Core\Database())->getDatabase();
$faker = Faker\Factory::create();

$stmt = $db->prepare("INSERT INTO articles(title, body, image) VALUES (:title, :body, :image)");

for($i = 0; $i < 20; $i++) {
    $title = $faker->sentence();
    $body = $faker->paragraphs(5, true);

    $stmt->execute([
        "title" => $title,
        "body" => $body,
        "image" => $faker->imageUrl(640, 480, 'animals', true)
    ]);
}
