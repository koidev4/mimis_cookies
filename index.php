<?php require 'includes/data.php'; ?>
<?php include 'includes/data.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Home - <?= $shopName ?></title>
</head>
<body>

<?php include 'includes/header.php'; ?>

<main>
    <h2>Welcome to <?= $shopName ?>!</h2>
    <p>Freshly baked cookies made every day.</p>
    <h3>The Todays Favorites</h3>
    <ul>
        <?php for ($i = 0; $i < 2; $i++): ?>
            <li><?= $cookies[$i] ?> - P<?= $prices[$i] ?></li>
        <?php endfor; ?>
    </ul>
</main>

<?php include 'includes/footer.php'; ?>

</body>
</html>
