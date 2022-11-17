<?php 
include "../components/head.php"; 
include $_INNER_PATH ."/routes.php"; 
$old = false;
if(isset($_SESSION['POST'])){
    if(count($_SESSION['POST']) != 0){
        $old = true;
    }
}
?>
<link rel="stylesheet" href="<?= $_OUTER_PATH ."./css/style.css"?>">

<body>

<div class="container">
    <?php include $_INNER_PATH."./views/components/navigation.php";  ?>
    
    <div class="row">
        <div class="col-4 left"></div>
        <div class="col-4 big">

        <h1>Add new product </h1>

    <form action="" method="post" class="form-group">

            <div class="form-group">
                <h5><label for="f1">Product name</label></h5>
                <textarea class="form-control" type="text" name="name" rows="3" id="f4" value="<?=($old)? $_SESSION['POST']['name'] : ""?>" ></textarea>
            </div>
            <div class="form-group">
               <h5> <label for="f2">Category</label></h5>
                <input type="text" name="category" placeholder="Category" id="f1" value="<?=($old)? $_SESSION['POST']['category'] : ""?>" class="form-control"">
            </div>
            <div class="form-group">
                <h5><label for="f3">Price</label></h5>
                <input type="number" step=".01" name="price" placeholder="Price " id="f3"  value="<?=($old)? $_SESSION['POST']['price'] : ""?>" class="form-control" ">
            </div>
        

            <div class="form-group">
               <h5> <label for="f4">Product description</label></h5>
                <textarea class="form-control" type="text" name="about" rows="6" id="f4" value="<?=($old)? $_SESSION['POST']['about'] : ""?>" ></textarea>
            </div>

            
            <button type="submit" name="save" class="btn btn-primary mt-3 mb-3">SAVE</button>
        
        </div>
        <div class="col-4 right"></div>
    </div>
    </form> 
    
</div>
</body>
</html>

<?php
    $_SESSION['POST'] = [];
?>

