<?php include '../view/header.php' ?>
<main>
    <section>
        <h1></h1>
        <form action="/individual/gear/index.php" method="post">
            <input type="hidden" name="action" value="add_gear_data">
            Gear Name: <input type="text" name="gear_name"> <br>
            Gear Description: <input type="text" name="" id=""> <br>
            Gear Category: <select name="gear_category">
                <?php foreach ($gear_categories as $gear_category) : ?>
                    <option value="<?= $gear_category[0] ?>"><?= $gear_category[0] ?></option>
                <?php endforeach; ?>
            </select> <br>
            Gear Manufacturer: <input type="text" name="" id=""><br>
            <input type="submit" value="Submit">
        </form>
    </section>
</main>
<?php include '../view/footer.php'; ?>