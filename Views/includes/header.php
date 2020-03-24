<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="../Views/includes/css/style.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link mr-5" href="/home/listAllProducts">Products List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-5" href="/home/addProduct">Add Product</a>
                    </li>
                </ul>
                <?php if($_SERVER['REQUEST_URI'] == '/home/addProduct'){
                    echo '<div class="col-8 text-right">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit" form="addproduct">Add Product</button>
                </div>';
                }else{
                    echo '<div class="col-8 text-right">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit" form="productlist">Delete Marked</button>
                </div>';
                } ?>
                
            </div>
        </div>
    </nav>