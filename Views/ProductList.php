<?php include_once('includes/header.php'); ?>

<div class="container">
    <h2>All available products</h2>
    <form action="/home/deleteProduct" method="post" id="productlist">
        <div class="row row-cols-1 row-cols-md-4">
            <?php foreach ($data as $products => $value) : ?>
                <div class="col mb-4 ">
                    <div class="card shadow p-3 mb-5 bg-white rounded">
                        <input class="form-check-input ml-1" type="checkbox" name="checkbox[]" value="<?php echo $value->product_id ?>" name="checkbox">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?php echo $value->SKU; ?></h5>
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item text-center"><?php echo $value->product_name; ?></li>
                            <li class="list-group-item text-center">Price: <?php echo $value->price; ?> Eur</li>
                            <li class="list-group-item text-center">Product Info: <?php echo $value->product_info; ?></li>
                        </ul>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </form>

    <?php include_once('includes/footer.php'); ?>