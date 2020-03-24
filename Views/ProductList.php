<?php include_once('includes/header.php'); ?>

<div class="container">
    <h2>All available products</h2>
    <form action="/home/deleteProduct" method="post" id="productlist">
    <div class="row row-cols-1 row-cols-md-4">
        <?php foreach ($data as $products) : ?>
            <div class="col mb-4 ">
                <div class="card shadow p-3 mb-5 bg-white rounded">
                <input class="form-check-input ml-1" type="checkbox" name="checkbox[]" value="<?php echo $products['user_id'] ?>" name="checkbox">
                    <img src="https://picsum.photos/id/870/200/300?random=1" class="card-img-top" alt="..." width="70px">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $products['user_name']; ?></h5>
                        <p class="card-text"><?php echo $products['user_password'] . BR . $products['email']; ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
    </form>

    <?php include_once('includes/footer.php'); ?>