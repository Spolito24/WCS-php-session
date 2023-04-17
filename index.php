<?php require 'inc/data/products.php'; ?>
<?php require 'inc/head.php';
session_start();
// get the quantity of each cookies
if (!empty($_POST)) {
    foreach ($catalog as $id => $cookie)
        if (isset($_POST['quantity_' . $id]) || !empty($_POST['quantity_' . $id])) {
            $_SESSION['cart_' . $id] += $_POST['quantity_' . $id];
        }
    header('Location: index.php');
}


?>
<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($catalog as $id => $cookie) { ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $cookie['name']; ?></h3>
                        <p><?= $cookie['description']; ?></p>

                        <form action="<?PHP $_SERVER['PHP_SELF'] ?>" method="POST">
                            <input type="text" name="quantity_<?= $id ?>" value="1" hidden>
                            <input name="add" type="submit" value="Add to cart" class="btn btn-primary">

                        </form>
                    </figcaption>
                </figure>
            </div>
        <?php } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>