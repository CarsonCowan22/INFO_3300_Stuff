<?php include('../view/header.php'); ?>
<main>
    <section>
        <h1>Available Books</h1>
        <table style="border: 1px solid black">
            <tr>
                <td>Titlte</td>
                <td>Author</td>
                <td>Action</td>
            </tr>
            <?php foreach ($books as $book) : ?>
                <tr>
                    <td><?= $book['title'] ?></td>
                    <td><?= $book['authors'] ?></td>
                    <td><a href="../checkouts/index.php?action=checkout&book_id=<?= $book['book_id'] ?>">Checkout</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <?php //vardump($books); ?>
    </section>
</main>
<?php include('../view/footer.php'); ?>