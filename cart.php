<?php require 'inc/head.php'; ?>
<?php require 'inc/data/products.php';
session_start();
/*
if (!empty($_POST)) {
    session_destroy();
    header("Location: index.php");
}
*/
?>

<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($catalog as $id => $cookie) { ?>
            <div>
                <?php if (!empty($_SESSION['cart_' . $id])) { ?>
                    <h3> <?php echo $cookie['name']; ?> </h3>
                    <p> your number of of cookies :
                        <?php echo $_SESSION['cart_' . $id]; ?>
                    </p>
                <?php } ?>

            </div>
        <?php } ?>
    </div>
</section>
<section>
    <h3> Destroy your session</h3>
    <form action="<?PHP $_SERVER['PHP_SELF'] ?>" method="POST">
        <input name="destroy" type="submit" value="destroy">
</section>
<?php require 'inc/foot.php'; ?>