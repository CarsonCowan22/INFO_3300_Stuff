<?php include '../view/header.php'; ?>
<main>
    <section>
        <h1></h1>
        <?php echo $message . '</br>'; ?>
        <a href="/individual/gear/index.php?action=add_gear">Add Gear</a>
        <table>
            <tr>
                <td>Gear Name</td>
                <td>Gear Description</td>
                <td>Gear Category</td>
                <td>Gear Manufacturer</td>
            </tr>
            <?php foreach ($inventory as $item): ?>
                <tr>
                    <td><?= $item['gear_name']?></td>
                    <td><?= $item['gear_description']?></td>
                    <td><?= $item['gear_category']?></td>
                    <td><?= $item['gear_manufacturer']?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>
</main>
<?php include '../view/footer.php'; ?>