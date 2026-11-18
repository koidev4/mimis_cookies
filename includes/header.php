<?php $currentPage = basename($_SERVER['PHP_SELF']); ?>
<style>

    body {
    font-family: Arial, sans-serif;
    margin: 0;
    background: #ffffff;
    color: #000000;
    align-items: center;
    }

    header {
        background: #000000;
        color: #ffffff;
        padding: 10px 20px;
    }
    
    nav a {
        color: #ffffff;
        text-decoration: none;
        padding: 8px 14px;
        margin-right: 5px;
        border: 1px solid transparent;
        border-radius: 4px;

    }

    nav a:hover {
        border: 1px solid #ffffff;
        border-radius: 4px;
    }

    nav a.active {
        background: #ffffff;
        color: #000000;
        font-weight: bold;
    }



    footer {
        background: #000000;
        color: #ffffff;
        text-align: center;
        padding: 10px;

    }
    main {
        padding: 20px;
    }

    /* styles for table */
      
    table {
        border-collapse: collapse;
    }

    th {
        background: black;
        color: #fff;
        border-radius: 4px;
    }
    th, td {
        border: 1px solid black;
        padding: 8px;
    }


    
</style>
<header>
    <h1><?= $shopName ?></h1>
    <nav>
        <?php foreach ($pages as $file => $label): ?>
            <?php if ($file == $currentPage): ?>
                <a href="<?= $file ?>" class="active"><?= $label ?></a>
            <?php else: ?>
                <a href="<?= $file ?>"><?= $label ?></a>
            <?php endif; ?>
        <?php endforeach; ?>
    </nav>
</header>
