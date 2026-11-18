<?php require 'includes/data.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Menu - <?= $shopName ?></title>
</head>
<body>

<?php include 'includes/header.php'; ?>

<main>
    <h2>Cookie Menu</h2>

    <table border="1" cellpadding="8">
        <tr>
            <th>#</th>
            <th>Cookie</th>
            <th>Price</th>
            <th>Remarks</th>
        </tr>
        <?php for ($i = 0; $i < count($cookies); $i++): ?>
        <tr>
            <td><?= $i + 1 ?></td>
            <td><?= $cookies[$i] ?></td>
            <td>P<?= $prices[$i] ?></td>
            <td>
                <?php if ($prices[$i] >= 40): ?>
                    Premium
                <?php elseif ($prices[$i] >= 35): ?>
                    Best Seller
                <?php else: ?>
                    Budget Friendly
                <?php endif; ?>
            </td>
        </tr>

        <?php endfor; ?>
    </table>
        <br>


    <table border="1" cellpadding="8">
    <tr>
        <th>#</th>
        <th>Cookie</th>
        <th>Price</th>
        <th>Remarks</th>
        <th>Stock</th>
        <th>Status</th>
    </tr>
    <?php for ($i = 0; $i < count($cookies); $i++): ?>
    <tr>
        <td><?= $i + 1 ?></td>
        <td><?= $cookies[$i] ?></td>
        <td>P<?= $prices[$i] ?></td>
        <td>
            <?php if ($prices[$i] >= 40): ?>
                Premium
            <?php elseif ($prices[$i] >= 35): ?>
                Best Seller
            <?php else: ?>
                Budget Friendly
            <?php endif; ?>
        </td>
        <td><?= $stocks[$i] ?></td>
        <td>
            <?php if ($stocks[$i] == 0): ?>
                Sold Out
            <?php elseif ($stocks[$i] <= 5): ?>
                Low Stock
            <?php else: ?>
                Available
            <?php endif; ?>
        </td>
    </tr>
    <?php endfor; ?>
</table>

    <h2>Order Receipt</h2>
    <?php
    
    $quantity = 6;
    $subtotal = $prices[0] * $quantity;
    $total = $subtotal + $deliveryFee;   // 20 becomes 20 (type juggling)
    $isBulk = $quantity >= 5;
    $message = "You ordered " . $quantity . " " . $cookies[0];

    ?>
    <p><?= $message ?></p>
    <p>Subtotal: P<?= $subtotal ?></p>
    <p>Delivery Fee: P<?= $deliveryFee ?></p>
    <p>Total: P<?= $total ?></p>
    <?php if ($isBulk): ?>
        <p>Bulk order! You get a FREE cookie.</p>
    <?php endif; ?>
</main>



<?php include 'includes/footer.php'; ?>
</body>
</html>
