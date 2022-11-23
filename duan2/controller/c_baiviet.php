<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <p> Nội dung :</p>
        <textarea name="post_wait_content" id="" cols="30" rows="10"></textarea>
        <p>Ngày Đăng </p>
        <input type="date" name="post_wait_date" id="">
        <p>Tên bài viết</p>
        <input type="text" name="post_wait_name" id="">
        <p>Tác giả</p>
        <input type="text" name="author" id="">
        <p>Loại bài viết</p>
        <select name="id_post_type" id="">

<?php
include '../model/db.php';

$sql = "select * from post_type";

$kq = $conn->query($sql);

foreach ($kq as $row) {
?>
    <option value="<?php echo $row["id_post_type"] ?>"><?php echo $row["post_type"] ?></option>
<?php
}
?>
</select>
        <p>Ảnh</p>
        <input type="file" name="img" id="">
        <p>Mô tả</p>
        <input type="text" name="pre_content_wait" id="">

        <button name="send">Gửi</button>


    </form>
    <?php
        include '../model/db.php';
        if (isset($_POST['send'])) {
            $target_dir = "../img1/";
            $target_file = $target_dir . $_FILES["img"]["name"];

            $post_wait_name = $_POST['post_wait_name'];
            $pre_content_wait = $_POST['pre_content_wait'];
            $post_wait_date = $_POST['post_wait_date'];
            $id_post_type = $_POST['id_post_type'];
            $author = $_POST['author'];
            $post_wait_content = $_POST['post_wait_content'];

            $anh = $_FILES['img']['name'];
            move_uploaded_file($_FILES["img"]["tmp_name"],$target_file);

     $sql= " INSERT INTO `post_wait`(`id_post_wait`, `post_wait_content`, `post_wait_date`, `id_post_type`, `post_wait_name`, `author`, `img`, `pre_content_wait`) VALUES ('','$post_wait_content','$post_wait_date','$id_post_type','$post_wait_name','$author','$anh','$pre_content_wait')";
            $kq = $conn->prepare($sql);
            $kq->execute();
            if(file_exists($target_file)){
                echo "Tên file đã tồn tại trên server ko được ghi đè";
                $allowUpload = false;
            }

            elseif(move_uploaded_file($_FILES["img"]["tmp_name"],$target_file)){
                echo "Upload ảnh thành công tại ". $target_file;
            }
        }


        ?>
    
</body>
</html>