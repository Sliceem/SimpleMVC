<?php include_once('includes/header.php'); ?>
<div class="container">
    <form action="/home/insertProducts" method="POST" id="addproduct">
        <!-- <form action="" method="POST" id="addproduct"> -->
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
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Product Type: </label>
                    </div>
                    <select class="custom-select" id="selector-field" name='selector'>
                        <option selected>Choose...</option>
                        <option value="Book">Book</option>
                        <option value="Dvd">Dvd</option>
                        <option value="Furniture">Furniture</option>
                    </select>
                </div>
                <div class='hide' id="Book">
                    <input class="form-control" type="text" name="weight" placeholder="Weight">
                </div>
                <div class='hide' id="Dvd">
                    <input class="form-control" type="text" name="size" placeholder="Dvd Size">
                </div>
                <div class='hide' id="Furniture">
                    <input class="form-control" type="text" name="dimensions" placeholder="HxWxL">
                </div>
    </form>
</div>
<div class="col-sm">
    <div class="Book alert alert-info" role="alert">
        Please provide Book Weight in KG!
    </div>
    <div class="Dvd alert alert-info" role="alert">
        Please provide Dvd Size in MB!
    </div>
    <div class="Furniture alert alert-info" role="alert">
        Please provide Dimension - HxWxL in cm !
    </div>
</div>

<?php include_once('includes/footer.php'); ?>