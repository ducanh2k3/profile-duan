<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/admin.css">
</head>

<body>
    <aside>
        <div class="sticky">
            <div align="center" class="administrator">
                <a href="../view/admin.php">
                    <ion-icon name="home-outline"></ion-icon> Administrator
                </a>
                <hr>
            </div>
            <div>
                <div class="tags" style="background-image: linear-gradient(45deg, rgb(65, 88, 208)0%, rgb(200, 80, 192)50%, rgb(255, 204, 112));
                display: block;
                color: rgb(255,248,220);">
                    <a href="">
                        <ion-icon name="clipboard-outline"></ion-icon>Manage Post</ion-icon>
                    </a>

                </div>
                <div class="tags">
                    <a href="member.html">
                        <ion-icon name="people-outline"></ion-icon>
                        Manage Member</ion-icon>
                    </a>
                </div>
            </div>
        </div>

    </aside>


    <article>
    <form  method="post">
        <table border="1">
            <tr>
            <td>post-id</td>
            <td>post-content</td>
            <td>post-date</td>
            <td>post-name</td>
            <td>author</td>
            <td>post-type</td>
            <td>post-image</td>
            </tr>

            <?php
            include '../../model/db.php';
            $sql='select * from post inner join post_type on post_type.id_post_type=post.id_post_type ';
            $kq= $conn->query($sql);
            foreach($kq as $row){
                $id_post=$row['id_post'];
                ?>
                   <tr>
                
            <td name='id_post'><?php echo$row['id_post']?></td>
            <td><?php echo$row['post_content']?></td>
            <td><?php echo$row['post_date']?></td>
            <td><?php echo$row['post_name']?></td>
            <td><?php echo$row['author']?></td>
            <td><?php echo $row['post_type']?></td>
            <td><img style="width:120px ;" src="../../img/<?php echo$row['img']?>" alt="" srcset="">
               </td>
               
               <td><button> <a href="../view/manage_detail.php?id=<?php echo$row['id_post']?>"> Sửa</a></button></td>
               <td><button name="delete">Xóa</button></td>
        
            </tr>


                <?php
            }
            
            ?>
        </table>
        </form>
        <?php
        if(isset($_POST['delete'])){
            $id_post= $row['id_post'];

        
            $sql_delete="delete from post where id_post=$id_post";
            $kq=$conn->query($sql_delete);
            if ($kq->execute()) {
                header("location:list.php");
            }else{
                echo "Xóa thất bại";
            }

        }
        ?>
            <button><a href="../view/add_post.php">Thêm bài viết</a></button>
    </article>


</body>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</html>