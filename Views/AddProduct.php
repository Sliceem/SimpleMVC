<?php include_once('includes/header.php'); ?>
<div class="container">
    <form action="/home/addProduct" method="POST" id="addproduct">
    <div class="row">
    <div class="col-sm">
                <div class="form-group">
                    <label for="sku">SKU</label>
                    <input type="text" class="form-control" name='sku' placeholder="SKU number" required>
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name='name' placeholder="Product name" required>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" name="price" placeholder="Product price" required>
                </div>
                <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
    </form>
    </div>
    <div class="col-sm">
    </div>
</div>
</div>
</div>
<?php include_once('includes/footer.php'); ?>