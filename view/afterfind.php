<?php
include '../view/header-costumer.php';
include '../model/db.php';
$find=$_GET['find'];
echo $find;
$sql="select * from post where post_name like '%$find%'";
$kq = $conn->query($sql);
foreach ($kq as $row) {



    ?>

        <div class="inside">
            <a href="bvchitiet.php?id_bv=<?php echo $row['id_post'] ?>">
                <img style="width:300px ;" src="../img/<?php echo $row['img'] ?>" alt="">
                <p>
                    <?php echo $row['post_name'] ?></p>
                <p> <?php echo $row['author'] ?></p>

            </a>


        </div>


    <?php } ?>
</div>

