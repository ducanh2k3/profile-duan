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
        <form method="post" enctype="multipart/form-data">
            <p>Tên bài viết :</p>
            <input type="text" name="post_name" id="">
            <p>Mô tả </p>
            <input type="text" name="pre_content" id="">
            <p>Ngày Viết </p>
            <input type="date" name="date" id="">
            <p>Tác giả</p>
            <input type="text" name="author" id="">
            <p>Loại bài viết</p>
            <select name="id_post_type" id="">

                <?php
                include '../../model/db.php';

                $sql = "select * from post_type";

                $kq = $conn->query($sql);

                foreach ($kq as $row) {
                ?>
                    <option value="<?php echo $row["id_post_type"] ?>"><?php echo $row["post_type"] ?></option>
                <?php
                }
                ?>
            </select>
            <p>Nội dung bài viết</p>
            <textarea name="post_content" id="" cols="30" rows="10"></textarea>

            <p>Ảnh </p><input type="file" name="anh">


            <button name="add">Thêm bài viết</button>
        </form>
        
        <?php
        include '../../model/db.php';
        if (isset($_POST['add'])) {
            $target_dir = "../../img/";
            $target_file = $target_dir . $_FILES["anh"]["name"];

            $post_name = $_POST['post_name'];
            $pre_content = $_POST['pre_content'];
            $post_date = $_POST['date'];
            $id_post_type = $_POST['id_post_type'];
            $author = $_POST['author'];
            $post_content = $_POST['post_content'];

            $anh = $_FILES['anh']['name'];
            move_uploaded_file($_FILES["anh"]["tmp_name"],$target_file);









     $sql= " INSERT INTO `post`(`id_post`, `post_content`, `post_date`, `id_post_type`, `view`, `post_name`, `author`, `img`, `pre_content`) VALUES ('','$post_content','$post_date','$id_post_type','','$post_name','$author','$anh','$pre_content')";
            $kq = $conn->prepare($sql);
            $kq->execute();
            if(file_exists($target_file)){
                echo "Tên file đã tồn tại trên server ko được ghi đè";
                $allowUpload = false;
            }

            elseif(move_uploaded_file($_FILES["anh"]["tmp_name"],$target_file)){
                echo "Upload ảnh thành công tại ". $target_file;
            }
        }


        ?>


    </article>


</body>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</html>