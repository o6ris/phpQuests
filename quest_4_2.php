<?php
$indiana_movies = [
    "Raiders of the Lost Ark" => ["Harrison Ford", "Karen Allen", "Paul Freeman"],
    "Indiana Jones and the Temple of Doom" => ["Harrison Ford", "Kate Capshaw", "Ke Huy Quan"],
    "Indiana Jones and the Last Crusade" => ["Harrison Ford", "Sean Connery", "Denholm Elliott"]
];
arsort($indiana_movies);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($indiana_movies as $key => $movie) : ?>
    <ul>
        <li>
            <?= 'In the movie ' . $key . ', the main actors are: '; ?>
            <?php foreach ($indiana_movies[$key] as $key => $actors) : ?>
            <ul>
                <li><?= $actors . ': '; ?></li>
            </ul>
            <?php endforeach; ?>
        </li>
    </ul>
    <?php endforeach; ?>
</body>
</html>