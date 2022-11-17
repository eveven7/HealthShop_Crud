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

        <h1>Product information </h1>

    <form action="" class="form-group">

            <div class="form-group"> 
               <h5><label   for="f1">Product name</label></h5>  
                <p2><?=$item->name?> </p2>
            </div>
            <div class="form-group">
               <h5><label for="f2">Category</label></h5> 
                <p2><?=$item->category?></p2>
            </div>
            <div class="form-group">
               <h5> <label for="f3">Price</label></h5>
                <p2><?=$item->price?></p2>
            </div>
        

            <div class="form-group">
                <h5><label for="f4">Product description</label></h5>
                <p2><?=$item->about?></p2>
            </div>

            <form action="<?=$_OUTER_PATH.'/views/item/edit.php'?>" method="get" class="button">
            <input type="hidden" class= "btn" name="id" value=" <?=$item->id?>">
            <button type="submit" name="edit" class="btn btn-primary mt-3 mb-3">EDIT</button>
        
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

