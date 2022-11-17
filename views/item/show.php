<?php 
include "../components/head.php"; 
// include ".../models/Item.php"; 

include $_INNER_PATH ."/routes.php"; 
?>
<body>
    <div class="row-5"> </div>
<div class="container">
    <?php include $_INNER_PATH."./views/components/navigation.php";  ?>

    <link rel="stylesheet" href="<?= $_OUTER_PATH ."/css/style.css"?>">



   <div class="row">
            <div class="col-4 left">

            <!-- <img src=<?php
            if ($item->category == "Outdoor Plants") {
                echo "'https://media2.giphy.com/media/3og0IBsA1cJdB9HXMs/giphy.gif?cid=ecf05e47f3xid54sjgjjrt52dgraxlp7ookimr4jazc2m8f8&rid=giphy.gif&ct=g'" ;
            }
            if ($item->category == "Laundry & cleaning") {
                echo "'https://media0.giphy.com/media/6C5GbY5kB1pGeNXpRN/giphy.gif?cid=ecf05e47ygwczw4arh5d5owwpcwyxthhw6psnebdule3d6ao&rid=giphy.gif&ct=g'";
            }
            if ($item->category == "Beds") {
                echo "'https://media4.giphy.com/media/fQimiw4sE5KTKacOJo/giphy.gif?cid=ecf05e47nifi5z5xyypx9p03bvblbly8syxm405t8j10qubg&rid=giphy.gif&ct=g'";
            }
            if ($item->category == "Home Decor") {
                echo "'https://media2.giphy.com/media/uNVDY9MRGv7ADO4loE/giphy.gif?cid=ecf05e47jufevzlcgzjjlw5rxz4sp7xjc1an230bggfo4aqe&rid=giphy.gif&ct=g'";
            }


	?> alt=""> -->
            
            </div>
            <div class="col-4 big">


    <div class="form-group">
            <label class = "f1" for="f1">Product name</label>
            <p><?=$item->name?> </p>
        </div>
        <div class="form-group">
            <label class = "f1"  for="f2">Category</label>
           <p><?=$item->category?></p>
        </div>
        <div class="form-group">
            <label class = "f1" for="f3">Price</label>
            <p><?=$item->price?></p>
        </div>
        <div class="form-group">
            <label class = "f1" for="f4">Product description</label>
           <p><?=$item->about?></p>
        </div>
        <form action="<?=$_OUTER_PATH.'/views/item/edit.php'?>" method="get" class="button">
            <input type="hidden" class= "btn" name="id" value=" <?=$item->id?>">
            <button type="submit" name="edit" class="btn btn-success">EDIT</button>
       

        </div>
            <div class="col-4 right"></div>
        </div>

 </form>
</div>

   
</body>


</html>

