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
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Options</label>
                    </div>
                    <select class="custom-select" id="selector-field">
                        <option selected>Choose...</option>
                        <option value="car">Car</option>
                        <option value="playstation">Playstation</option>
                        <option value="furniture">Furniture</option>
                    </select>
                </div>
                <div class='hide' id="car">
                    <p>Year<input class="form-control" type="text" name="dimensions" placeholder="Year"></p>
                </div>
                <div class='hide' id="playstation">
                    <p>Type<input class="form-control" type="text" name="year" placeholder="Playstation Type"></p>
                </div>
                <div class='hide' id="furniture">
                    <p>Dimensions<input class="form-control" type="text" name="type" placeholder="HxWxL"></p>
                </div>
    </form>
</div>
<div class="col-sm">
    <div class="furniture alert alert-info" role="alert">
        Please provide Dimension - Height, Width and Lenght in cm !
    </div>
    <div class="car alert alert-info" role="alert">
        Please provide manufacture year in format like 1999/10/10!
    </div>
    <div class="playstation alert alert-info" role="alert">
        Please provide Playstation Type - Fat, Slim or Pro!
    </div>
</div>

<?php include_once('includes/footer.php'); ?>