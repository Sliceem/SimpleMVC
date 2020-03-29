<?php include_once('includes/header.php'); ?>

<div class="container">
    <h2>All available products</h2>
    <form action="/home/deleteProduct" method="post" id="productlist">
        <div class="row row-cols-1 row-cols-md-4">
            <?php foreach ($data as $products) : ?>
                <div class="col mb-4 ">
                    <div class="card shadow p-3 mb-5 bg-white rounded">
                        <input class="form-check-input ml-1" type="checkbox" name="checkbox[]" value="<?php echo $products['product_id'] ?>" name="checkbox">
                        <div class="card-body">
                            <h5 class="card-title">SKU number: <?php echo $products['SKU']; ?></h5>
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item"><img src="<?php echo $products['image_path'] ?>" class="card-img-top" alt="..." width="70px"></li>
                            <li class="list-group-item"><?php echo $products['product_name']; ?></li>
                            <li class="list-group-item">Price: <?php echo $products['price']; ?> Eur</li>
                            <li class="list-group-item">Product Info: <?php echo $products['product_info']; ?></li>
                        </ul>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </form>

    <?php include_once('includes/footer.php'); ?>