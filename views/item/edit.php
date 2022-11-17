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

            <h1>Product update </h1>

        <form action="" method="post" class="form-group">

                <div class="form-group">
                    <label for="f1">Product name</label>
                    <textarea class="form-control" placeholder="Product name" name="name" rows="3" id="f4">  <?=($old)? $_SESSION['POST']['name'] : $item->name?> </textarea>
                </div>
                <div class="form-group">
                    <label for="f2">Category</label>
                    <input type="text"  name="category" id="f2" value="<?=($old)? $_SESSION['POST']['category'] : $item->category?>" class="form-control" ">
                </div>
                <div class="form-group">
                    <label for="f3">Price</label>
                    <input type="number" step=".01" name="price" id="f3" value="<?=($old)? $_SESSION['POST']['price'] : $item->price?>" class="form-control" ">
                </div>
            

                <div class="form-group">
                    <label for="f4">Product description</label>
                <textarea class="form-control"name="about" rows="6" id="f4">  <?=($old)? $_SESSION['POST']['about'] : $item->about?> </textarea>
                </div>

                <input type="hidden" name="id" value="<?=$item->id?>" >
                <button type="submit" name="update" class="btn btn-success mt-3 mb-3">Save</button>
            
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
