<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/body.css">
    <title>Document</title>
</head>
<body>
    <div class="loaibaiviet">
        <?php
        ?>


    </div>
    <div class="baiviet">
<?php
include '../model/db.php';
$sql='select * from post ';
$kq=$conn ->query($sql);
foreach( $kq as $row){



?>
<img src="../img/<?php echo $row['img']?>" alt="">
<div class="chitiet">
<div class="name"> <a href="bvchitiet.php?id_bv=<?php echo$row['id_post']?>"><?php echo$row['post_name']?></a> </div>
<div class="preview"><?php echo$row['pre_content']?></div>




<div class="tg"><p>Tác giả: <?php echo$row['author']?></p></div>
</div>





<?php }?>
</div>
    
</body>
</html>

