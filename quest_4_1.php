<?php
$indiana_movies = [
    "Raiders of the Lost Ark" => 1981,
    "Indiana Jones and the Temple of Doom" => 1984,
    "Indiana Jones and the Last Crusade" => 1989
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
        <li><?= $movie . ': ' . $key . ' - '; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>